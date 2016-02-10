# Spiral TinyMCE wrapper

## Usage Example

At frontend (dark template required), simply add virtual tag to your form:

```html
<dark:use bundle="spiral:tinymce-bundle"/>
...
<form:tinymce value="Lorem Ipsum is simply dummy text" name="editor" label="My tinyMCE"/>
```
The code above will be transformed into html and will add required javascript.

Browser output:  
![Spiral TinyMCE wrapper](https://cloud.githubusercontent.com/assets/12486924/12951274/987bc650-d022-11e5-99fe-e6a240fc1514.jpg)

## Options

* **name** *(required)* -- textarea name-attr (to send in form)
* **label** *(optional)* -- editor label (if not specified, will not be generated)
* **label-class** *(optional)* -- custom class to be passed into label 
* **base-url** *(optional)* -- url for TinyMCE resources (like themes, plugins, skins etc)
* **config** *(optional)* -- TinyMCE config in JSON format. [(TinyMCE docs)](https://www.tinymce.com/docs/)

## Installation

`composer require spiral/tinymce`  
`spiral register spiral/tinymce`

## Update
`composer update spiral/tinymce`  
`spiral publish spiral/tinymce`

## License

Copyright (c) 2016 Yauheni Yasinau and contributors. Released under an [MIT license](https://github.com/spiral-modules/tinymce/blob/master/LICENSE).
