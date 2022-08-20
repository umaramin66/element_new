<?php

# PHP Quick start example: list envelopes and their status.
# Copyright (c) 2018 by DocuSign, Inc.
# License: The MIT License -- https://opensource.org/licenses/MIT

require_once('vendor/autoload.php');
require_once('vendor/docusign/esign-client/autoload.php');

function list_envelopes(){
    # Settings
    # Fill in these constants
    #
    # Obtain an OAuth access token from https://developers.docusign.com/oauth-token-generator
    $accessToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImtpZCI6IjY4MTg1ZmYxLTRlNTEtNGNlOS1hZjFjLTY4OTgxMjIwMzMxNyJ9.eyJUb2tlblR5cGUiOjUsIklzc3VlSW5zdGFudCI6MTU4OTYzMDg0OCwiZXhwIjoxNTg5NjU5NjQ4LCJVc2VySWQiOiJhZjZhYTU5Mi03MjYyLTRjYjQtYWViMC1lMDc4Zjk1ZGExZWIiLCJzaXRlaWQiOjEsInNjcCI6WyJzaWduYXR1cmUiLCJjbGljay5tYW5hZ2UiLCJvcmdhbml6YXRpb25fcmVhZCIsInJvb21fZm9ybXMiLCJncm91cF9yZWFkIiwicGVybWlzc2lvbl9yZWFkIiwidXNlcl9yZWFkIiwidXNlcl93cml0ZSIsImFjY291bnRfcmVhZCIsImRvbWFpbl9yZWFkIiwiaWRlbnRpdHlfcHJvdmlkZXJfcmVhZCIsImR0ci5yb29tcy5yZWFkIiwiZHRyLnJvb21zLndyaXRlIiwiZHRyLmRvY3VtZW50cy5yZWFkIiwiZHRyLmRvY3VtZW50cy53cml0ZSIsImR0ci5wcm9maWxlLnJlYWQiLCJkdHIucHJvZmlsZS53cml0ZSIsImR0ci5jb21wYW55LnJlYWQiLCJkdHIuY29tcGFueS53cml0ZSJdLCJhdWQiOiJmMGYyN2YwZS04NTdkLTRhNzEtYTRkYS0zMmNlY2FlM2E5NzgiLCJhenAiOiJmMGYyN2YwZS04NTdkLTRhNzEtYTRkYS0zMmNlY2FlM2E5NzgiLCJpc3MiOiJodHRwczovL2FjY291bnQtZC5kb2N1c2lnbi5jb20vIiwic3ViIjoiYWY2YWE1OTItNzI2Mi00Y2I0LWFlYjAtZTA3OGY5NWRhMWViIiwiYW1yIjpbImludGVyYWN0aXZlIl0sImF1dGhfdGltZSI6MTU4OTYzMDg0NSwicHdpZCI6IjhmNzRlYmE5LTdmMjYtNGEwOS04YjQ5LWI1YzJiYTA5ODJkMyJ9.BhmXknLndJSreN0sLOU7MmmPfJzcZqxYti7m3-SHqvLZAwYWbAtpiIIvVmq44qUhDpZegu9U8_IdOG94si7d7ugXf9Z0CrG1PLzx82dq99G8S4yJ7niDejG2-at-w4lQI1v0BH2vhPxR7o9kbbc60hZdcjoSgIk0RIFybbx2aFPQKCFv00z7EBuxc1eCi3vnhBTCtt9z1YSr3sYSipBPSUUqMxzwJFJYrKNPvkBCAScQ-nIhBqfCe-tnZgN0RaX0KfipqVDzloPQK3JQonXnPMZVIfPHzk-kTkeqGb7VTdX6U6BkkjKwxkzfaS6NkVz13ZDgifimSNUvFzUwqYacdg';
    # Obtain your accountId from demo.docusign.com -- the account id is shown in the drop down on the
    # upper right corner of the screen by your picture or the default picture.
    $accountId = '10546860';

    # The API base_path
    $basePath = 'https://demo.docusign.net/restapi';

    # configure the EnvelopesApi object
    $config = new DocuSign\eSign\Configuration();
    $config->setHost($basePath);
    $config->addDefaultHeader("Authorization", "Bearer " . $accessToken);
    $apiClient = new DocuSign\eSign\Client\ApiClient($config);
    $envelopeApi = new DocuSign\eSign\Api\EnvelopesApi($apiClient);

    #
    # Step 1. Create the options object. We want the envelopes created 10 days ago or more recently.
    #
    $date = new Datetime();
    $date->sub(new DateInterval("P10D"));
    $options = new DocuSign\eSign\Api\EnvelopesApi\ListStatusChangesOptions();
    $options->setFromDate($date->format("Y/m/d"));

    #
    #  Step 2. Request the envelope list.
    #
    $results = $envelopeApi->listStatusChanges($accountId, $options);
    return $results;
};

# Mainline
try {
    $results = list_envelopes();
    ?>
<html lang="en">
    <body>
        <h4>Results</h4>
        <p><code><pre><?= print_r ($results) ?></pre></code></p>
    </body>
</html>
    <?php
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    if ($e instanceof DocuSign\eSign\Client\ApiException) {
        print ("\nDocuSign API error information: \n");
        var_dump ($e->getResponseBody());
    }
}
