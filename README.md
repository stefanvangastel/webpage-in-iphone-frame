# webpage-in-iphone-frame
This super simple small php script shows a given webpage (url) in a iPhone (6) dimension surrounded by a iPhone frame.

## Install
You can either run a container or host the php file yourself.

### Docker
`docker run -d -p 80:80 -e URL=http://example.com stefanvangastel/webpage-in-iphone-frame`

### Webserver
Make sure you have a webserver that can run PHP and place the contents of this repo in the documentroot. Ten access:
`http://mywebsite/index.php?url=http://example.com`

## Build
Build the dockerfile yourself by:

* Cloning this repo
* Running `docker build -t stefanvangastel/webpage-in-iphone-frame .` in the cloned directory/

## Example

![Example](https://github.com/stefanvangastel/webpage-in-iphone-frame/blob/master/img/example.png)
