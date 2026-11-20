# stream.HTML · Privacy

Effective 19 November 2026

## Table of contents

1. [Operator and scope](#operator-and-scope)
2. [Using this service](#using-this-service)
3. [Basic usage counts](#basic-usage-counts)
4. [Optional Google Analytics](#optional-google-analytics)
5. [Your choices](#your-choices)
6. [Cookies and browser storage](#cookies-and-browser-storage)
7. [Access, correction and complaints](#access-correction-and-complaints)

## Operator and scope

Andrés Trujillo Mateus (byUwUr), Colombia, is responsible for the processing described here. Contact him directly at [mateus@byuwur.co](mailto:mateus@byuwur.co).

This policy covers the public tool catalog and interactive configurators at stream.byuwur.co and controller.byuwur.co, and explains how overlay output and optional uploads handle content.

The privacy banner appears in the hosted configurator. Resource and OBS overlay modes run without the banner or website analytics. The catalog links to privacy settings through its policy pages.

## Using this service

Generated overlay URLs can contain settings readable by anyone with the link and by the host serving the overlay. Remote images and fonts contact their hosts, including jsDelivr and Google Fonts where used. Base64 images are read locally. The supplied upload adapter has Catbox disabled. An enabled provider can receive the original image bytes. Direct adapter requests reach the server and are rate-limited using a network-address hash. Expired counters are pruned on later requests. Website measurement excludes OBS sources, preview frames and downloaded overlays.

Keep private names, tokens and media URLs out of overlay links you share. Clearing saved configurator settings removes that browser copy. Links already pasted into OBS or sent to another person remain usable with their embedded settings.

The web host receives browser requests and network addresses to deliver the site. I can’t view visitor access logs in the hosting dashboard, and I don’t know how long the host keeps them. The policy pages include their text and privacy controls in the page itself.

## Basic usage counts

`usage_count` is one page view or one predefined action on this project. Before you choose, your browser sends predefined labels for the action, page type and resource to byuwur.co without cookies, a browser ID or a referrer URL. Our server reports these labels and the project to Google Analytics under a service identifier. It includes the country code when supplied by the host, or “unknown” otherwise. The counter does not forward your IP address, region, city, coordinates, content or personal identifiers to Google. The host receives your network address to deliver the request and may keep technical logs.

Repeated actions by the same person each count once. Accepting analytics keeps this count running and enables the browser measurement below. If you reject analytics, the basic counter records only page views. Action counts and optional browser analytics stop.

GA4 reports use fixed labels for the project (`project`), page type (`surface`), tool or link (`resource`), and operation (`action`). Consented settings events can also name the setting that changed (`field_id`). Its value is excluded. The basic counter uses `usage_country` for the hosting provider’s country code or `unknown`.

## Optional Google Analytics

If you accept, Google Analytics 4 receives a predefined page location and title, a limited referral origin or recognized internal route, and fixed identifiers for the project, interface and resource. Selected links record a click. These measurements help the creator understand visits, useful actions and repeat use. An export click cannot establish that a file was saved or used.

Google receives connection information including IP address, pseudonymous browser and session identifiers, and general technical information. Country-level reporting may be available. Analytics excludes entered values, filenames, document text, email addresses and generated URLs. This implementation uses no advertising personalization, Google signals or user-provided data collection. Google may process data outside Colombia. [How Google uses information from partner sites](https://policies.google.com/technologies/partner-sites).

The GA4 property keeps detailed event and user data for 14 months. Reset on new activity is off. Aggregated reports have a separate retention policy. Removing cookies changes this browser's identifiers and does not erase previously collected reports.

You can change your choice in Privacy settings on either policy page.

## Your choices

Before you choose, we count visits and selected actions. **Close** dismisses the banner and leaves the current choice in place. **Accept** also enables browser analytics. **Reject** stops browser analytics and action counts. Basic page views continue. Open **Privacy settings** on either policy page to change or withdraw your choice.

The 180-day choice applies across the portfolio, hosted viewer/editor playgrounds and the stream.HTML and stream.FGC websites on byuwur.co subdomains. Withdrawal clears the site’s GA cookies. Other open tabs recheck before measuring and when they regain focus.

## Cookies and browser storage

| Name | Purpose | Scope | Duration |
| --- | --- | --- | --- |
| `byuwur_analytics` | Choice, notice version and choice time | byuwur.co and its subdomains, path / | 180 days from choice |
| `byPrivacyDismissed` | Remembers closing the privacy banner. Closing leaves the analytics choice unchanged. | byuwur.co and its subdomains, with origin-local storage if the cookie cannot be saved | 180 days |
| `_ga` | Distinguishes consented browsers | byuwur.co, path / | Google's default of two years, refreshed with activity, subject to browser limits |
| `_ga_YBLWBPK758` | Maintains GA4 session state | byuwur.co, path / | Same Google default and browser limits |
| `stream.html.settings.<encoded folder>` | Accepted settings and editor layout, potentially including entered configuration | Tool folder cookie or origin-local storage fallback | Cookie one year, fallback until cleared |
| `stream.html.theme` | Editor appearance | Origin-local storage | Until cleared |

## Access, correction and complaints

Email the project name, the information concerned and what you would like the operator to do. Avoid sending documents, tokens or other sensitive material unless needed to handle your request. Under Colombia's Law 1581 you can consult, update or correct your data, ask about its use, request proof of authorization and, where applicable, request deletion or revoke authorization. I respond as soon as possible. Under articles 14 and 15, the usual maximum is 10 working days for a request to see your data and 15 working days for a claim. If an extension is needed, I will explain why and give you a response date within the limits set by law. After using that procedure, you may bring a complaint to the Superintendencia de Industria y Comercio. [Law 1581 of 2012, articles 8 and 14–16](https://normograma.dian.gov.co/dian/compilacion/docs/ley_1581_2012.htm).

We update the date on this page when this policy changes. We will give notice before a material change in purpose and seek a new authorization where required.

[Privacy](https://byuwur.co/privacy/stream.html) · [Cookies](https://byuwur.co/cookies/stream.html)
