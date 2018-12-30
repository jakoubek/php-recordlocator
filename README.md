php-recordlocator
=================

A library to encode integers into a short and easy to read string.

php-recordlocator is a PHP clone of Jesse Vincent's Perl module [Number::RecordLocator](http://search.cpan.org/~jesse/Number-RecordLocator-0.005/lib/Number/RecordLocator.pm).

A **RecordLocator** is an alphanumerical string that represents an integer. This library encodes integers to RecordLocators and decodes RecordLocators back to integers.

A **RecordLocator** is shorter than the corresponding integer and easier to read and memorize. You can use it to encode autoincrement primary keys from an database to an human-readable representation for your users.

*Best Practical* uses RecordLocators for their web-based todo list and task manager [Hiveminder](http://hiveminder.com/).

Examples
--------

- The integer *5,325* encodes to the RecordLocator *78G*.
- The integer *3,512,345* encodes to the RecordLocator *5E82T*.

Both RecordLocators are shorter than their integer equivalent. You can encode more than 33.5 million integers in an 5-char RecordLocator: the largest 5-char RecordLocator, *ZZZZZ*, represents the integer *33,554,431*.

With 6 chars you can encode integers up to more than 1 billion.

Usage
-----

```php
// encoding an integer into a RecordLocator string
$generator = new RecordLocator;
$integer = 5325;
$string = $generator->encode($integer);
echo $string;
```

    78G

```php
// decoding a RecordLocator string back to an integer
$generator = new RecordLocator;
$string = '78G';
$integer = $generator->encode($string);
echo $integer;
```

    5325

Changelog
---------

#### 1.0.0 - released 2013-03-03

* Initial release

#### 1.1.0 - released 2018-12-30

* updated to PHPUnit 7
