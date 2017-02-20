# Project 2 - Input/Output Sanitization

Time spent: 15 hours spent in total

## User Stories

The following **required** functionality is completed:

1\. [&#10003;]  Required: Import the Starting Database

2\. [&#10003;]  Required: Set Up the Starting Code

3\. [&#10003;]  Required: Review code for Staff CMS for Users

4\. [&#10003;]  Required: Complete Staff CMS for Salespeople
  * [&#10003;]  Required: index.php
  * [&#10003;]  Required: show.php
  * [&#10003;]  Required: new.php
  * [&#10003;]  Required: edit.php

5\. [&#10003;]  Required: Complete Staff CMS for States
  * [&#10003;]  Required: index.php
  * [&#10003;]  Required: show.php
  * [&#10003;]  Required: new.php
  * [&#10003;]  Required: edit.php

6\. [&#10003;]  Required: Complete Staff CMS for Territories
  * [&#10003;]  Required: index.php
  * [&#10003;]  Required: show.php
  * [&#10003;]  Required: new.php
  * [&#10003;]  Required: edit.php

7\. [&#10003;]  Required: Add Data Validations
  * [&#10003;]  Required: Validate that no values are left blank.
  * [&#10003;]  Required: Validate that all string values are less than 255 characters.
  * [&#10003;]  Required: Validate that usernames contain only the whitelisted characters.
  * [&#10003;]  Required: Validate that phone numbers contain only the whitelisted characters.
  * [&#10003;]  Required: Validate that email addresses contain only whitelisted characters.
  * [&#10003;]  Required: Add *at least 5* other validations of your choosing.
                * Validate uniqueness of users.username (bonus)
                * Email must contain @, checked in both client and server side
                * Validate phone number is between 10 to 20 characers long
                  * max length 15 numbers, Source: https://en.wikipedia.org/wiki/Telephone_numbering_plan 
                * Validate that first name and last name only contains letters and - in both salesperson and users
                * Validate that country name must only contain Letters 


8\. [&#10003;]  Required: Sanitization
  * [&#10003;]  Required: All input and dynamic output should be sanitized.
  * [&#10003;]  Required: Sanitize dynamic data for URLs
  * [&#10003;]  Required: Sanitize dynamic data for HTML
  * [&#10003;]  Required: Sanitize dynamic data for SQL

9\. [&#10003;]  Required: Penetration Testing
  * [&#10003;]  Required: Verify form inputs are not vulnerable to SQLI attacks.
  * [&#10003;]  Required: Verify query strings are not vulnerable to SQLI attacks.
  * [&#10003;]  Required: Verify form inputs are not vulnerable to XSS attacks.
  * [&#10003;]  Required: Verify query strings are not vulnerable to XSS attacks.
  * [&#10003;]  Required: Listed other bugs or security vulnerabilities
                * No authentication - CSRF can delete, add, or modify data by anyone
                * No encryption - vulnerable to man-in-the-middle attack


The following advanced user stories are optional:

- [&#10003;]  Bonus: On "public/staff/territories/show.php", display the name of the state.

- [&#10003;]  Bonus: Validate the uniqueness of `users.username`.

- [&#10003;]  Bonus: Add a page for "public/staff/users/delete.php".

- [&#10003;]  Bonus: Add a Staff CMS for countries.

- [&#10003;]  Advanced: Nest the CMS for states inside of the Staff CMS for countries


## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/w8CzFIO.gifv' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright [2017] [Stephen Yang]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.