# Markdown to PDF convertor

This PHP script convert all Markdown files in PDF.

I use CSS file for format Markdown in PDF.

## Requirements

Requires **PHP** `7.*` and later and **composer** for install this project.

## Installation

```
composer install
```

## Usage

For convert one file in PDF.

```
php Md2Pdf.php [outputFileName] [Header file name] [markdownFile.md]
```

For convert many file (number isn't limited) in PDF.

```
php Md2Pdf.php [outputFileName] [Header file name] [markdownFile1.md] [markdownFile2.md] [markdownFile3.md]
```

## Custom

You can custom printing if you change **CSS** file in `assets/` folder.