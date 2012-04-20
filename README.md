# Adoptkitten helper for CodeIgniter

This helper allows you to add placeholder images in your applications. It is extremely useful when prototyping the layout of the page.

## Thanks to [edmundask](https://github.com/edmundask) he made the original placeholder helper for codeigniter, has you can see this is just a fork of his code. So if you're looking for images other than kittens go to his repository.

# Usage

`adoptkitten(width, height);`

The helper uses [placekitten.com](http://placekitten.com) service.

## Examples

- 300px square: `adoptkitten(300);`.
- 200x100px rectangular: `adoptkitten(200, 100);`

You can also pass in an array:

`adoptkitten(array('width' => 100, 'height' => 100));`

# COPYRIGHT

Copyright (c) 2012 Marco Monteiro

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.