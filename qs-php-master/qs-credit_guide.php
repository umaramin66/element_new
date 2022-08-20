<?php

# PHP Quick start example: Send signing request by email.
# Copyright (c) 2018 by DocuSign, Inc.
# License: The MIT License -- https://opensource.org/licenses/MIT

require_once('vendor/autoload.php');
require_once('vendor/docusign/esign-client/autoload.php');
require 'inc/initDb.php';

function send_document_for_signing($email,$name){
    #
    # The document $fileNamePath will be sent to be signed by <signer_name>

    # Settings
    # Fill in these constants
    #
    # Obtain an OAuth access token from https://developers.docusign.com/oauth-token-generator
    $accessToken ='eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImtpZCI6IjY4MTg1ZmYxLTRlNTEtNGNlOS1hZjFjLTY4OTgxMjIwMzMxNyJ9.eyJUb2tlblR5cGUiOjUsIklzc3VlSW5zdGFudCI6MTU5NDA3MjkzNiwiZXhwIjoxNTk0MTAxNzM2LCJVc2VySWQiOiJhZjZhYTU5Mi03MjYyLTRjYjQtYWViMC1lMDc4Zjk1ZGExZWIiLCJzaXRlaWQiOjEsInNjcCI6WyJzaWduYXR1cmUiLCJjbGljay5tYW5hZ2UiLCJvcmdhbml6YXRpb25fcmVhZCIsInJvb21fZm9ybXMiLCJncm91cF9yZWFkIiwicGVybWlzc2lvbl9yZWFkIiwidXNlcl9yZWFkIiwidXNlcl93cml0ZSIsImFjY291bnRfcmVhZCIsImRvbWFpbl9yZWFkIiwiaWRlbnRpdHlfcHJvdmlkZXJfcmVhZCIsImR0ci5yb29tcy5yZWFkIiwiZHRyLnJvb21zLndyaXRlIiwiZHRyLmRvY3VtZW50cy5yZWFkIiwiZHRyLmRvY3VtZW50cy53cml0ZSIsImR0ci5wcm9maWxlLnJlYWQiLCJkdHIucHJvZmlsZS53cml0ZSIsImR0ci5jb21wYW55LnJlYWQiLCJkdHIuY29tcGFueS53cml0ZSJdLCJhdWQiOiJmMGYyN2YwZS04NTdkLTRhNzEtYTRkYS0zMmNlY2FlM2E5NzgiLCJhenAiOiJmMGYyN2YwZS04NTdkLTRhNzEtYTRkYS0zMmNlY2FlM2E5NzgiLCJpc3MiOiJodHRwczovL2FjY291bnQtZC5kb2N1c2lnbi5jb20vIiwic3ViIjoiYWY2YWE1OTItNzI2Mi00Y2I0LWFlYjAtZTA3OGY5NWRhMWViIiwiYW1yIjpbImludGVyYWN0aXZlIl0sImF1dGhfdGltZSI6MTU5NDA3MjkzMiwicHdpZCI6IjhmNzRlYmE5LTdmMjYtNGEwOS04YjQ5LWI1YzJiYTA5ODJkMyJ9.ljJ9UCVAz-oaxhlDqLh2e3Bxh8xOzPftArZYQmJto_fwr5O4v3FbBNMSQC2zuy0ukoj0vBF_18OhdkmmPsqduA2P85SJxhR2228YVX6QqFH05e-aKG40aZMz7wVbIYgLZWSupGWAgBAlL2LTumnMijRtOYl8jo97UoviMVkclD-wL9kDw_NUpZTeDzox3XfLknayogmH79F5DJ5fbusKB84SMNdySpBrhXdY3-e1DgZeHU_nOgv87K57qG7pBrT4wktle0yJBggOrksO6sGZNslmI4fSbMnRhSJYd-MpKeit6ZAkQd1_Dn8fjUU25tQ720yRZmfGKCO8fdQEAn7LQA';

    # Obtain your accountId from demo.docusign.com -- the account id is shown in the drop down on the
    # upper right corner of the screen by your picture or the default picture.
    $accountId = '10546860';
    # Recipient Information:
    $signerName = $name;
    $signerEmail = $email;
    # The document you wish to send. Path is relative to the root directory of this repo.
    $fileNamePath = 'pdf_design_ahmad/pdf_design/credit_guide.pdf';

    # The API base_path
    $basePath = 'https://demo.docusign.net/restapi';

    # Constants
    $appPath = getcwd();

    #
    # Step 1. The envelope definition is created.
    #         One signHere tab is added.
    #         The document path supplied is relative to the working directory
    #
    # Create the component objects for the envelope definition...
    $contentBytes = file_get_contents($appPath . "/" . $fileNamePath);
    $base64FileContent =  base64_encode ($contentBytes);

    # create the DocuSign document object
    $document = new DocuSign\eSign\Model\Document([
        'document_base64' => $base64FileContent,
        'name' => 'Credit Guide Document', # can be different from actual file name
        'file_extension' => 'pdf', # many different document types are accepted
        'document_id' => '1' # a label used to reference the doc
    ]);

    # The signer object
    $signer = new DocuSign\eSign\Model\Signer([
        'email' => $signerEmail, 'name' => $signerName, 'recipient_id' => "1", 'routing_order' => "1"
    ]);

    # DocuSign SignHere field/tab object
    $signHere = new DocuSign\eSign\Model\SignHere([
        'document_id' => '1', 'page_number' => '10', 'recipient_id' => '1',
        'tab_label' => 'SignHereTab', 'x_position' => '100', 'y_position' => '155'
    ]);


    # Add the tabs to the signer object
    # The Tabs object wants arrays of the different field/tab types
    $signer->setTabs(new DocuSign\eSign\Model\Tabs(['sign_here_tabs' => [$signHere]]));

    # Next, create the top level envelope definition and populate it.
    $envelopeDefinition = new DocuSign\eSign\Model\EnvelopeDefinition([
        'email_subject' => "(Element) Please Sign this credit guide document",
        'documents' => [$document], # The order in the docs array determines the order in the envelope
        # The Recipients object wants arrays for each recipient type
        'recipients' => new DocuSign\eSign\Model\Recipients(['signers' => [$signer]]),
        'status' => "sent" # requests that the envelope be created and sent.
    ]);

    #
    #  Step 2. Create/send the envelope.
    #
    $config = new DocuSign\eSign\Configuration();
    $config->setHost($basePath);
    $config->addDefaultHeader("Authorization", "Bearer " . $accessToken);
    $apiClient = new DocuSign\eSign\Client\ApiClient($config);
    $envelopeApi = new DocuSign\eSign\Api\EnvelopesApi($apiClient);
    $results = $envelopeApi->createEnvelope($accountId, $envelopeDefinition);
    return $results;
};

# Mainline
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        if(isset($_GET['email']))
        {
            $email = $_GET['email'];
            $leads = DB::queryFirstRow("select * from leads where id = '".$email."'");
        }
        else{
            $email = 'ahmadwork405@gmail.com';
            $_GET['name'] = "Fahadau";

        }
        $results = send_document_for_signing($email,$_GET['name']);
        ?>
        <html lang="en">
        <body>
        <h4>Results</h4>
        <p>Status: <?= $results['status'] ?></p>
        <p>Please Close the Window</p>
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
    die();
}
# Since it isn't a POST, print the form:
?>
<html lang="en">
<body>
<form method="post">
    <input type="submit" value="Send document signature request!"
           style="width:21em;height:2em;background:#1f32bb;color:white;font:bold 1.5em arial;margin: 3em;"/>
</form>
</body>
</html>

