# files.host · Cookies

Effective 19 November 2026

## Table of contents

1. [Operator and scope](#operator-and-scope)
2. [Session cookies, display preferences and receipts](#session-cookies-display-preferences-and-receipts)
3. [Usage measurement](#usage-measurement)
4. [Uploads, recipients and reports](#uploads-recipients-and-reports)
5. [Availability, retention and deletion](#availability-retention-and-deletion)
6. [Access, correction and complaints](#access-correction-and-complaints)

## Operator and scope

Andrés Trujillo Mateus (byUwUr), Colombia, is responsible for the processing described here. Contact him directly at [mateus@byuwur.co](mailto:mateus@byuwur.co).

files.host provides temporary storage to invited uploaders and approved applications. The workspace and the raw-file server use separate hosts. Anyone who obtains a working public file URL can read or copy its contents without signing in. Files are not listed in a public directory.

## Session cookies, display preferences and receipts

The workspace uses the host-only security cookie `__Host-filesstaff` over HTTPS for staff sign-in and request protection. The authenticated session expires after 30 minutes of inactivity or one hour from sign-in. The separate raw-file host does not issue that session cookie. The browser keeps theme and accessibility choices under `files.host.appearance` in local storage until cleared. Route state is held in memory. Clearing site data resets preferences and can end a session. A saved deletion receipt is a separate file under your control.

## Usage measurement

files.host uses neither the byUwUr basic usage counter nor Google Analytics. Its quotas, security events and file access timestamps operate independently of analytics choices on other byUwUr sites.

## Uploads, recipients and reports

The host processes file bytes, name, size, SHA-256 digest, type, issuing application or invitation, timestamps and file status to deliver and expire files. Network-derived identifiers limit upload attempts and enforce quotas. Amazon Web Services (AWS) hosts files.host and receives connection information when you upload or retrieve a file or visit the workspace. An integrating application handles the information you give it. Authorized staff can review records or restricted content when investigating abuse or a legal obligation.

The Report form records the file reference, category, explanation and any reply address you provide. Use a reference when reporting, appealing or asking for removal. Keep the deletion secret private. Staff accounts require login and multi-factor authentication. Security and audit records support access control, case review and service recovery.

## Availability, retention and deletion

Under the service defaults, inactivity expires a file after seven days. A qualifying read or revalidation resets that clock. The absolute limit from publication is 30 days for invitations and up to 360 days for approved apps. Use the private deletion receipt to revoke the public URL earlier. Expiry or revocation prevents new reads. Copies already downloaded and transfers already in progress may remain. Ordinary file contents are excluded from routine backups. A documented preservation hold can keep restricted material for a specific case.

Default cleanup removes names, hashes and removal reasons seven days after removal and clears report text, contacts and audit reasons after 90 days, subject to holds. Operational identifiers can remain for attribution. Deleting a file does not immediately erase quota records, backup metadata or a report about it.

## Access, correction and complaints

Email the project name, the information concerned and what you would like the operator to do. Avoid sending documents, tokens or other sensitive material unless needed to handle your request. Under Colombia's Law 1581 you can consult, update or correct your data, ask about its use, request proof of authorization and, where applicable, request deletion or revoke authorization. I respond as soon as possible. Under articles 14 and 15, the usual maximum is 10 working days for a request to see your data and 15 working days for a claim. If an extension is needed, I will explain why and give you a response date within the limits set by law. After using that procedure, you may bring a complaint to the Superintendencia de Industria y Comercio. [Law 1581 of 2012, articles 8 and 14–16](https://normograma.dian.gov.co/dian/compilacion/docs/ley_1581_2012.htm).

We update the date on this page when this policy changes. We will give notice before a material change in purpose and seek a new authorization where required.

[Privacy](https://byuwur.co/privacy/files.host) · [Cookies](https://byuwur.co/cookies/files.host)
