# Aurorum/Flarum-Better-Iframe

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
This extension allows some iframe attributes to use in Flarum, you can use the code like this to use iframe in your post:

````
<iframe src="URL"></iframe>
````

Also, attributes like "style", for inline css are allowed, thus, you can use any of the following attributes, just the same as writing in HTML, a full attributes used example would look like this:
````
<iframe src="URL" style="CSS" scrolling="yes/no" allow="attribute"></iframe>
````
       
## How to use `<iframe>`:
Please read this document: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/iframe

中文：https://developer.mozilla.org/zh-CN/docs/Web/HTML/Element/iframe

Note: The attributes `srcdoc`, and `allowfullscreen` are disabled for safety consideration.

## Demo:
Live demo: https://dev.aurorum.co/d/88-aurorumflarum-better-iframe-demo  (如果在中国大陆，可能不能打开此链接)

Demo picture:
![图片](https://user-images.githubusercontent.com/88573201/215254799-090f5823-1eee-42f3-95fb-dfff05c59571.png)

## Some related sources, if you like my extension, please give me a star on github.

Github: https://github.com/Aurorum-Studio/flarum-better-iframe

Dev Website: https://dev.aurorum.co/d/90-aurorumflarum-better-iframe

Support Forum: https://discuss.flarum.org/d/32332-better-iframe

## If there is any issue, please contact ,with support forum, dev website, or github issues.
