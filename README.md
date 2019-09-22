# GitHub Actions PHP for Slack notification

*Appearance on Slack :*

![Slack message](slack_message.png "Slack message")

This GitHub action code is available on github ,check it out : https://github.com/svikramjeet/git-actions.

<hr/>

## Usage

### New YML synthax

```yml
- name: Slack notification
  env:
    WEBHOOK_URL: ${{ secrets.WEBHOOK_URL }}
    MESSAGE: 'Custom message'.
    USERNAME: ThisIsMyUsername # Optional.
    CHANNEL: general - Slack channel# Optional.
    ICON: ${{ secrets.ICON }}
  uses: svikramjeet/git-actions@master
```


### Environment variables

* **`USERNAME`** : From name in slack message
* **`CHANNEL`** Message to be sent to channel of the webhook.the *args* of this Action.
* **`MESSAGE`** : Custom MESSAGE

### Secrets

* **`WEBHOOK_URL`**: the Slack webhook URL (**required**, see https://api.slack.com/incoming-webhooks).
* **`ICON`**: ICON to be displayed in slack message.
<hr/>
                                        That's all :heart:
