# DocuSign Quick Start examples for PHP

Repository: [qs-php](https://github.com/docusign/qs-php)

These quick start examples provide straight-forward
code examples for quickly
trying the DocuSign eSignature API with the
[PHP SDK](https://github.com/docusign/docusign-php-client).

The repo includes:

1. **qs-01-php-embed-signing-ceremony.php** --
   Embedding a signing ceremony in your web application.
2. **qs-02-php-send-envelope.php** --
   Sending a signing request via an email to the signer.
3. **qs-03-php-list-envelopes.php** -- 
   Listing the envelopes in the user's account, including their status.

These examples do not include authentication. Instead,
use the DocuSign DevCenter's
[OAuth token generator](https://developers.docusign.com/oauth-token-generator)
to create an access token.

For a PHP JWT authentication example, see the
[eg-01-php-jwt](https://github.com/docusign/eg-01-php-jwt)
repository. An OAuth Authorization Code Grant example
using the PHP Laravel framework is
also being developed.

For more information, see the
[DocuSign DevCenter Code Examples section](https://developers.docusign.com/esign-rest-api/code-examples).

## Installation

This example requires PHP v5.6 or later.

Download or clone this repository to a file directory
that is served by a PHP-enabled web server.

Then:

````
cd qs-php
composer require docusign/esign-client
````

### Configure the example's settings
Each quick start example is a standalone file. You will configure
each of the example files by setting the variables at the top of each
file:

 * **Access token:** Use the [OAuth Token Generator](https://developers.docusign.com/oauth-token-generator).
   To use the token generator, you'll need a
   [free DocuSign Developer's account.](https://go.docusign.com/o/sandbox/)

   Each access token lasts 8 hours, you will need to repeat this process
   when the token expires. You can use the same access token for
   multiple examples.

 * **Account Id:** After logging into the [DocuSign Sandbox system](https://demo.docusign.net),
   you can copy your Account Id from the dropdown menu by your name. See the figure:

   ![Figure](https://raw.githubusercontent.com/docusign/qs-python/master/documentation/account_id.png)
 * **Signer name and email:** Remember to try the DocuSign signing ceremony using both a mobile phone and a regular
   email client.

## Run the examples

Use your web browser to navigate to the url for the
php file `qs-01-php-embed-signing-ceremony.php` that
you have just installed and configured.

In a similar manner, run the other examples too:

* qs-02-php-send-envelope.php
* qs-03-php-list-envelopes.php

## Support, Contributions, License

Submit support questions to [StackOverflow](https://stackoverflow.com). Use tag `docusignapi`.

Contributions via Pull Requests are appreciated.
All contributions must use the MIT License.

This repository uses the MIT license, see the
[LICENSE](https://github.com/docusign/eg-01-Python-jwt/blob/master/LICENSE) file.
