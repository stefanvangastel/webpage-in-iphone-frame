# webpage-in-iphone-frame
This super simple small (selfhosted!) php script shows a given webpage (url) in a iPhone (6) dimension surrounded by an iPhone frame. Many hosted alternatives are out there, though this one you can use on a self-hosted environment and edit to your needs. Planning to add more phone types.

## Example
Live example: [here](http://giix.nl/demo/webpage-in-iphone-frame/index.php?url=http://creativiteiten.nl).

Will look like this (50% image size):

![Example](https://github.com/stefanvangastel/webpage-in-iphone-frame/blob/master/img/example_half.png)

## Install
You can either run a container or host the php file yourself.

### Docker
`docker run -d -p 80:80 -e URL=http://example.com stefanvangastel/webpage-in-iphone-frame`


[![stefanvangastel/webpage-in-iphone-frame docker image](http://dockeri.co/image/stefanvangastel/webpage-in-iphone-frame)](https://registry.hub.docker.com/u/stefanvangastel/webpage-in-iphone-frame/)

### Webserver
Make sure you have a webserver that can run PHP and place the contents of this repo in the documentroot. Ten access:
`http://mywebsite/index.php?url=http://example.com`

## Build
Build the dockerfile yourself by:

* Cloning this repo
* Running `docker build -t stefanvangastel/webpage-in-iphone-frame .` in the cloned directory/

