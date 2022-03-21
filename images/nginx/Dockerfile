FROM nginx:1.21.6-alpine
ADD activity.conf /etc/nginx/conf.d/activity.conf
ADD calendar.conf /etc/nginx/conf.d/calendar.conf

RUN set -eu && \
    rm -f /etc/nginx/conf.d/default.conf
