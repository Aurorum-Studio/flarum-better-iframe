# Aurorum/Flarum Better Iframe

## Basic introduction:
This project is an extension of flarum, an open resource forum web application. This extension allows users to embed a webpage into their posts, using the iframe element.

## How to install:
First of all, you need to have a Flarum website, with composer already installed. Then, run the following command in the shell, at the root dictionary of your flarum.
    
    composer require aurorum/flarum-better-iframe
   
## How to update:
Run the following commands:
    
    composer update aurorum/flarum-better-iframe
    php flarum migrate
    php flarum cache:clear

## How to use:
This extension allows most iframe elements to use in Flarum, you can use any of the following formats in your flarum post to use iframe.

           [iframe='URL']
           [iframe='URL' width='INT1']',
           [iframe='URL' width='INT1' height='INT2'',
           [iframe='URL' width='INT1' height='INT2' frameborder='INT3']',
           [iframe='URL' width='INT1' height='INT2' frameborder='INT3' marginwidth='INT4']',
           [iframe='URL' width='INT1' height='INT2' frameborder='INT3' marginwidth='INT4' marginheight='INT5']',
           [iframe='URL' width='INT1' height='INT2' frameborder='INT3' marginwidth='INT4' marginheight='INT5' scrolling='TEXT2']',
           [iframe='URL' width='INT1' height='INT2' frameborder='INT3' marginwidth='INT4' marginheight='INT5' scrolling='TEXT2' allowtransparency='TEXT1']',
           // The attributes use the same name they are in iframe, if you are not familiar with iframe, please read the following readme file.
           // For the 'URL', please add 'https://' protocol name before the url, for 'INT', please enter integer, and for 'TEXT', please enter 'true', or 'false'
           // Some websites may forbid you from embed their webpage, it would show an error info within the iframe window. Some http, or openssl websites may be forbidded by the browser.
         
       
## About iframe:
Please read this document: https://www.w3schools.com/tags/tag_iframe.asp
中文：https://www.w3school.com.cn/tags/tag_iframe.asp

## Demo:
Live demo: https://dev.aurorum.co/d/88-aurorumflarum-better-iframe-demo  (如果在中国大陆，可能不能打开此链接)

Demo picture:
![图片](https://user-images.githubusercontent.com/88573201/215254799-090f5823-1eee-42f3-95fb-dfff05c59571.png)

## Some related sources, if you like my extension, please give me a star on github.
Github: https://github.com/Aurorum-Studio/flarum-better-iframe
Dev Website: https://dev.aurorum.co/d/90-aurorumflarum-better-iframe
Support Forum: 

## If there is any issue, please contact ,with support forum, or github issues.
