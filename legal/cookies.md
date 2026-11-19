# byUwUr · Cookies

**Unpublished draft.** The operator’s contact details are under review. The effective date will be recorded at first publication.

Basic usage counts work without analytics cookies. Accepting adds browser measurement. Rejecting stops both types of measurement.

## Your choice across project sites

Accept analytics or Reject analytics in the notice. Ignoring it leaves only basic usage counts active. The choice applies to the eligible public pages on byuwur.co, www.byuwur.co, stream.byuwur.co, controller.byuwur.co, code.byuwur.co, csv.byuwur.co, diff.byuwur.co, json.byuwur.co, log.byuwur.co, mdedit.byuwur.co, md.byuwur.co, xml.byuwur.co, yaml.byuwur.co, fgc.byuwur.co and spa.byuwur.co. The site works with either choice.

Open **Privacy settings** and choose **Reject analytics** to withdraw. This stops this site's adapter and clears its GA cookies. Other open tabs check the shared choice on focus and before events. Background tabs can take longer to observe a change.

## Browser storage

| Name | Purpose | Scope | Duration |
| --- | --- | --- | --- |
| `byuwur_analytics` | Choice, notice version and choice time | byuwur.co and its subdomains, path / | 180 days from choice |
| `_ga` | Distinguishes consented browsers | byuwur.co, path / | Google's default of two years, refreshed with activity, subject to browser limits |
| `_ga_YBLWBPK758` | Maintains GA4 session state | byuwur.co, path / | Same Google default and browser limits |
| `lang`, `theme`, `SidebarExpand` | Interface language, appearance and sidebar state | Host, path / | One year |
| `bySPA:<base>:` keys including `APP_LANG`, `APP_THEME`, `URI`, `URL`, `ROUTES`, `_GET`, `_POST` | Framework settings and routing context, which can include request parameters | Origin-local storage scoped by application path | Until replaced or cleared |

Language, sidebar and framework entries apply where those controls are used. The SPA.php demo and Stream.html also use the following storage.

| Name | Purpose | Scope | Duration |
| --- | --- | --- | --- |
| `_GRECAPTCHA` when the widget runs | reCAPTCHA risk analysis | Google's reCAPTCHA domain | Provider-controlled expiry; confirm the deployed cookie before publication |
| `bySPA:<base>:DEMO_THEME` | UI kit theme | Origin-local storage | Until cleared |
| `stream.html.settings.<encoded folder>` | Accepted settings and editor layout, potentially including entered configuration | Tool folder cookie or origin-local storage fallback | Cookie one year, fallback until cleared |
| `stream.html.theme` | Editor appearance | Origin-local storage | Until cleared |

[Privacy](https://byuwur.co/privacy) · [Cookies](https://byuwur.co/cookies)
