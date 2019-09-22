FROM svikramjeet/php7.3

LABEL "com.github.actions.name"="GitHub Action for Slack Notification"
LABEL "com.github.actions.description"="Send a message to Slack from gihub via actions"
LABEL "com.github.actions.icon"="hash"
LABEL "com.github.actions.color"="red"

LABEL "repository"="https://github.com/svikramjeet/actions"
LABEL "homepage"="https://github.com/svikramjeet/git-actions"
LABEL "maintainer"="svikramjeet"
LABEL "version"="1.0"

ADD composer.json composer.lock /
RUN composer install
ADD entrypoint.php /
ADD composer.json /
RUN chmod +x /entrypoint.php

ENTRYPOINT ["php", "/entrypoint.php"]
