# Autoframe is a low level framework that is oriented on SOLID flexibility

[![Build Status](https://github.com/autoframe/components-filemime/workflows/PHPUnit-tests/badge.svg?branch=main)](https://github.com/autoframe/components-filemime/actions?query=branch:main)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
![Packagist Version](https://img.shields.io/packagist/v/autoframe/components-filemime?label=packagist%20stable)
[![Downloads](https://img.shields.io/packagist/dm/autoframe/components-filemime.svg)](https://packagist.org/packages/autoframe/components-filemime)

*PHP server side file mime SOLID*

Namespace:
- Autoframe\\Component\\FileMime

Class:
- AfrFileMimeClass + AfrFileMimeInterface + AfrFileMimeTrait
- Methods:
  - getFileMimeTypes: array  *[... 'image/jpeg' => ['jpeg','jpg','jpe'], ...]*
  - getFileMimeExtensions: array  *[... 'jpeg' => 'image/jpeg', ...]*
  - getFileMimeFallback: string  *'application/octet-stream'*
  - getAllMimesFromFileName: array *Input: '/dir/test.wmz' Output: ['application/x-ms-wmz','application/x-msmetafile'] (wmz extension has multiple mimes)*
  - getMimeFromFileName: string *Input: '/dir/test.jpg'  Output: 'image/jpeg'*
  - getExtensionsForMime: array *Input: 'image/jpeg' Output: ['jpeg','jpg','jpe'] *
  - getExtensionFromPath: string *Input: '/dir/test.jpg' Output: 'jpg' *
  
Traits:
- AfrFileMimeTypes * public static array $aAfrFileMimeTypes = [...] *
- AfrFileMimeExtensions * public static array $aAfrFileMimeExtensions = [...] *

Utility class reads/updates the file 'mime.types' and writes new traits AfrFileMimeExtensions and AfrFileMimeTypes
- AfrFileMimeGeneratorClass
- Runs only in local tests (not from inside vender dir)
- mime.types is updated from https://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types

