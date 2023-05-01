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
  - getFileMimeTypes: array
  - getFileMimeExtensions: array
  - getFileMimeFallback: string
  - getAllMimesFromFileName: array
  - getMimeFromFileName: string
  - getExtensionsForMime: array
  
Traits:
- AfrFileMimeTypes
- AfrFileMimeExtensions

Utility Trait reads the file 'mime.types' and updates the traits AfrFileMimeExtensions and AfrFileMimeTypes
- AfrFileMimeGeneratorTrait
- Runs in tests
- mime.types is updated from https://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types
