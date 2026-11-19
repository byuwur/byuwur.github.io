# byUwUr · Cookie

**未公開の草案です。** 運営者の連絡先の記載内容は確認中です。施行日は初回公開時に記載します。

基本集計には解析用 Cookie を使いません。許可するとブラウザー解析も有効になり、拒否すると両方の計測が停止します。

## 同意と撤回

解析を許可するか拒否するかを選べます。選択しない場合は基本集計のみ行います。この設定の対象は、byuwur.co, www.byuwur.co, stream.byuwur.co, controller.byuwur.co, code.byuwur.co, csv.byuwur.co, diff.byuwur.co, json.byuwur.co, log.byuwur.co, mdedit.byuwur.co, md.byuwur.co, xml.byuwur.co, yaml.byuwur.co, fgc.byuwur.co, spa.byuwur.co の計測対象ページです。どちらを選んでもサイトを使えます。

**プライバシー設定** で **解析を拒否** を選ぶと、この計測は停止し、対象の GA Cookie が消去されます。開いている他のタブでは、再びフォーカスされたときや操作を計測する前に選択を確認します。バックグラウンドのタブには反映が遅れる場合があります。

## ブラウザー内の保存

| 名前 | 用途 | 範囲 | 期間 |
| --- | --- | --- | --- |
| `byuwur_analytics` | 選択、版、選択した時刻 | byuwur.co とサブドメイン、パス / | 選択から180日 |
| `_ga` | 同意したブラウザーの識別 | byuwur.co、パス / | 既定は2年。利用に応じて更新され、ブラウザーの制限が適用されます |
| `_ga_YBLWBPK758` | GA4 のセッション状態 | byuwur.co、パス / | 同じ既定期間と制限 |
| `lang`、`theme`、`SidebarExpand` | 言語、外観、サイドバー | ホスト、パス / | 1年 |
| `bySPA:<base>:` の付く `APP_LANG`、`APP_THEME`、`URI`、`URL`、`ROUTES`、`_GET`、`_POST` など | 設定、経路、リクエストのパラメーター | オリジンのローカルストレージ内でアプリ別に保存 | 更新または削除まで |

言語、サイドバー、フレームワークの設定は、各機能を使用するサイトに適用されます。SPA.php デモと Stream.html では次の項目も保存します。

| 名前 | 用途 | 範囲 | 期間 |
| --- | --- | --- | --- |
| ウィジェット実行時の `_GRECAPTCHA` | reCAPTCHA のリスク分析 | Google の reCAPTCHA ドメイン | 提供元が設定。公開前に実環境で期限を確認 |
| `bySPA:<base>:DEMO_THEME` | UI キットの外観 | オリジンのローカルストレージ | 削除まで |
| `stream.html.settings.<encoded folder>` | 入力した設定を含む保存済み設定とエディターの配置 | ツールのフォルダーの Cookie またはオリジンのローカルストレージ | Cookie は1年、ローカルストレージは削除まで |
| `stream.html.theme` | エディターの外観 | オリジンのローカルストレージ | 削除まで |

[プライバシー](https://byuwur.co/privacy) · [Cookie](https://byuwur.co/cookies)
