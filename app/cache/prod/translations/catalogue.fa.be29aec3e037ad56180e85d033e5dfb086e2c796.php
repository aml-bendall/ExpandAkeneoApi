<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fa', array (
  'validators' => 
  array (
    'This value should be false.' => 'این مقدار باید نادرست(False) باشد.',
    'This value should be true.' => 'این مقدار باید درست(True) باشد.',
    'This value should be of type {{ type }}.' => 'این مقدار باید از نوع {{ type }} باشد.',
    'This value should be blank.' => 'این فیلد باید خالی باشد.',
    'The value you selected is not a valid choice.' => 'گزینه انتخابی معتبر نیست.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'باید حداقل {{ limit }} گزینه انتخاب کنید.|باید حداقل {{ limit }} گزینه انتخاب کنید.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'حداکثر {{ limit }} گزینه می توانید انتخاب کنید.|حداکثر {{ limit }} گزینه می توانید انتخاب کنید.',
    'One or more of the given values is invalid.' => 'یک یا چند مقدار نامعتبر وجود دارد.',
    'The fields {{ fields }} were not expected.' => 'فیلدهای {{ fields }} اضافی هستند.',
    'The fields {{ fields }} are missing.' => 'فیلدهای {{ fields }} کم هستند.',
    'This value is not a valid date.' => 'این مقدار یک تاریخ معتبر نیست.',
    'This value is not a valid datetime.' => 'این مقدار یک تاریخ و زمان معتبر نیست.',
    'This value is not a valid email address.' => 'این یک رایانامه معتبر نیست.',
    'The file could not be found.' => 'فایل پیدا نشد.',
    'The file is not readable.' => 'فایل قابلیت خواندن ندارد.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'فایل بیش از اندازه بزرگ است({{ size }} {{ suffix }}). حداکثر اندازه مجاز برابر {{ limit }} {{ suffix }} است.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'این نوع فایل مجاز نیست({{ type }}). نوع های مجاز {{ types }} هستند.',
    'This value should be {{ limit }} or less.' => 'این مقدار باید کوچکتر یا مساوی {{ limit }} باشد.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'بسیار طولانی است.حداکثر تعداد حروف مجاز برابر {{ limit }} است.|بسیار طولانی است.حداکثر تعداد حروف مجاز برابر {{ limit }} است.',
    'This value should be {{ limit }} or more.' => 'این مقدار باید برابر و یا بیشتر از {{ limit }} باشد.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'بسیار کوتاه است.تعداد حروف باید حداقل {{ limit }} باشد.|بسیار کوتاه است.تعداد حروف باید حداقل {{ limit }} باشد.',
    'This value should not be blank.' => 'این مقدار نباید تهی باشد.',
    'This value should not be null.' => 'باید مقداری داشته باشد..',
    'This value should be null.' => 'نباید مقداری داشته باشد.',
    'This value is not valid.' => 'این مقدار معتبر نیست.',
    'This value is not a valid time.' => 'این مقدار یک زمان صحیح نیست.',
    'This value is not a valid URL.' => 'این یک URL معتبر نیست.',
    'The two values should be equal.' => 'دو مقدار باید برابر باشند.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'فایل بیش از اندازه بزرگ است. حداکثر اندازه مجاز برابر {{ limit }} {{ suffix }} است.',
    'The file is too large.' => 'فایل بیش از اندازه بزرگ است.',
    'The file could not be uploaded.' => 'بارگذاری فایل با شکست مواجه شد.',
    'This value should be a valid number.' => 'این مقدار باید یک عدد معتبر باشد.',
    'This file is not a valid image.' => 'این فایل یک تصویر نیست.',
    'This is not a valid IP address.' => 'این مقدار یک IP معتبر نیست.',
    'This value is not a valid language.' => 'این مقدار یک زبان صحیح نیست.',
    'This value is not a valid locale.' => 'این مقدار یک محل صحیح نیست.',
    'This value is not a valid country.' => 'این مقدار یک کشور صحیح نیست.',
    'This value is already used.' => 'این مقدار قبلا مورد استفاده قرار گرفته است.',
    'The size of the image could not be detected.' => 'اندازه تصویر قابل شناسایی نیست.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'طول تصویر بسیار بزرگ است ({{ width }}px). بشینه طول مجاز {{ max_width }}px است.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'طول تصویر بسیار کوچک است ({{ width }}px). کمینه طول موردنظر {{ min_width }}px است.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ارتفاع تصویر بسیار بزرگ است ({{ height }}px). بشینه ارتفاع مجاز {{ max_height }}px است.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ارتفاع تصویر بسیار کوچک است ({{ height }}px). کمینه ارتفاع موردنظر {{ min_height }}px است.',
    'This value should be the user\'s current password.' => 'این مقدار می بایست کلمه عبور کنونی کاربر باشد.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => ' این مقدار می بایست دقیقا {{ limit }} کاراکتر داشته باشد.| این مقدار می بایست دقیقا {{ limit }} کاراکتر داشته باشد.',
    'The file was only partially uploaded.' => 'فایل به صورت جزیی بارگذاری شده است.',
    'No file was uploaded.' => 'هیچ فایلی بارگذاری نشد.',
    'No temporary folder was configured in php.ini.' => 'فولدر موقت در php.ini پیکربندی نشده است.',
    'Cannot write temporary file to disk.' => 'فایل موقت را نمی توان در دیسک نوشت.',
    'A PHP extension caused the upload to fail.' => 'اکستنشن PHP موجب شد که بارگذاری فایل با شکست مواجه شود.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'این مجموعه می بایست دارای {{ limit }} عنصر یا بیشتر باشد.|این مجموعه می بایست دارای {{ limit }} عنصر یا بیشتر باشد.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'این مجموعه می بایست دارای حداقل {{ limit }} عنصر یا کمتر باشد.|این مجموعه می بایست دارای {{ limit }} عنصر یا کمتر باشد.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'این مجموعه می بایست به طور دقیق دارا {{ limit }} عنصر باشد.|این مجموعه می بایست به طور دقیق دارای {{ limit }} قلم باشد.',
    'Invalid card number.' => 'شماره کارت نامعتبر است.',
    'Unsupported card type or invalid card number.' => 'نوع کارت پشتیبانی نمی شود یا شماره کارت نامعتبر است.',
    'This is not a valid International Bank Account Number (IBAN).' => 'این یک شماره حساب بین المللی بانک (IBAN) درست نیست.',
    'This value is not a valid ISBN-10.' => 'این مقدار یک ISBN-10 درست نیست.',
    'This value is not a valid ISBN-13.' => 'این مقدار یک ISBN-13 درست نیست.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'این مقدار یک ISBN-10 درست یا ISBN-13 درست نیست.',
    'This value is not a valid ISSN.' => 'این مقدار یک ISSN درست نیست.',
    'This value is not a valid currency.' => 'این مقدار یک یکای پول درست نیست.',
    'This value should be equal to {{ compared_value }}.' => 'این مقدار باید برابر با {{ compared_value }} باشد.',
    'This value should be greater than {{ compared_value }}.' => 'این مقدار باید از {{ compared_value }} بیشتر باشد.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'این مقدار باید بزرگتر یا مساوی با {{ compared_value }} باشد.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'این مقدار باید با {{ compared_value_type }} {{ compared_value }} یکی باشد.',
    'This value should be less than {{ compared_value }}.' => 'این مقدار باید کمتر از {{ compared_value }} باشد.',
    'This value should be less than or equal to {{ compared_value }}.' => 'این مقدار باید کمتر یا مساوی با {{ compared_value }} باشد.',
    'This value should not be equal to {{ compared_value }}.' => 'این مقدار نباید با {{ compared_value }} برابر باشد.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'این مقدار نباید {{ compared_value_type }} {{ compared_value }} یکی باشد.',
    'This form should not contain extra fields.' => 'این فرم نباید فیلد اضافی داشته باشد.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'فایل بارگذاری شده بسیار بزرگ است. لطفا فایل کوچکتری را بارگزاری کنید.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'مقدار CSRF نامعتبر است. لطفا فرم را مجددا ارسال فرمایید..',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'خطایی هنگام تعیین اعتبار اتفاق افتاد.',
    'Authentication credentials could not be found.' => 'شرایط تعیین اعتبار پیدا نشد.',
    'Authentication request could not be processed due to a system problem.' => 'درخواست تعیین اعتبار به دلیل مشکل سیستم قابل بررسی نیست.',
    'Invalid credentials.' => 'شرایط نامعتبر.',
    'Cookie has already been used by someone else.' => 'کوکی قبلا برای شخص دیگری استفاده شده است.',
    'Not privileged to request the resource.' => 'دسترسی لازم برای درخواست این منبع را ندارید.',
    'Invalid CSRF token.' => 'توکن CSRF معتبر نیست.',
    'Digest nonce has expired.' => 'Digest nonce منقضی شده است.',
    'No authentication provider found to support the authentication token.' => 'هیچ ارایه کننده تعیین اعتباری برای ساپورت توکن تعیین اعتبار پیدا نشد.',
    'No session available, it either timed out or cookies are not enabled.' => 'جلسه‌ای در دسترس نیست. این میتواند یا به دلیل پایان یافتن زمان باشد یا اینکه کوکی ها فعال نیستند.',
    'No token could be found.' => 'هیچ توکنی پیدا نشد.',
    'Username could not be found.' => 'نام ‌کاربری پیدا نشد.',
    'Account has expired.' => 'حساب کاربری منقضی شده است.',
    'Credentials have expired.' => 'پارامترهای تعیین اعتبار منقضی شده‌اند.',
    'Account is disabled.' => 'حساب کاربری غیرفعال است.',
    'Account is locked.' => 'حساب کاربری قفل شده است.',
  ),
));

$catalogueEn_US = new MessageCatalogue('en_US', array (
));
$catalogue->addFallbackCatalogue($catalogueEn_US);

return $catalogue;