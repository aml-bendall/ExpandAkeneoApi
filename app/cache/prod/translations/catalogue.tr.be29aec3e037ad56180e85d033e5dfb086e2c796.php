<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('tr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Bu değer olumsuz olmalıdır.',
    'This value should be true.' => 'Bu değer olumlu olmalıdır.',
    'This value should be of type {{ type }}.' => 'Bu değerin tipi {{ type }} olmalıdır.',
    'This value should be blank.' => 'Bu değer boş olmalıdır.',
    'The value you selected is not a valid choice.' => 'Seçtiğiniz değer geçerli bir seçenek değil.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'En az {{ limit }} seçenek belirtmelisiniz.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'En çok {{ limit }} seçenek belirtmelisiniz.',
    'One or more of the given values is invalid.' => 'Verilen değerlerden bir veya daha fazlası geçersiz.',
    'This field was not expected.' => 'Bu alan beklenen olmadı.',
    'This field is missing.' => 'Bu alan, eksik',
    'This value is not a valid date.' => 'Bu değer doğru bir tarih biçimi değildir.',
    'This value is not a valid datetime.' => 'Bu değer doğru bir tarihsaat biçimi değildir.',
    'This value is not a valid email address.' => 'Bu değer doğru bir e-mail adresi değildir.',
    'The file could not be found.' => 'Dosya bulunamadı.',
    'The file is not readable.' => 'Dosya okunabilir değil.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Dosya çok büyük ({{ size }} {{ suffix }}). İzin verilen en büyük dosya boyutu {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Dosyanın mime tipi geçersiz ({{ type }}). İzin verilen mime tipleri {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Bu değer {{ limit }} ve altında olmalıdır.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Bu değer çok uzun. {{ limit }} karakter veya daha az olmalıdır.',
    'This value should be {{ limit }} or more.' => 'Bu değer {{ limit }} veya daha fazla olmalıdır.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Bu değer çok kısa. {{ limit }} karakter veya daha fazla olmaldır.',
    'This value should not be blank.' => 'Bu değer boş bırakılmamalıdır.',
    'This value should not be null.' => 'Bu değer boş bırakılmamalıdır.',
    'This value should be null.' => 'Bu değer boş bırakılmalıdır.',
    'This value is not valid.' => 'Bu değer geçerli değil.',
    'This value is not a valid time.' => 'Bu değer doğru bir saat değil.',
    'This value is not a valid URL.' => 'Bu değer doğru bir URL değil.',
    'The two values should be equal.' => 'İki değer eşit olmalıdır.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Dosya çok büyük. İzin verilen en büyük dosya boyutu {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Dosya çok büyük.',
    'The file could not be uploaded.' => 'Dosya yüklenemiyor.',
    'This value should be a valid number.' => 'Bu değer geçerli bir rakam olmalıdır.',
    'This file is not a valid image.' => 'Bu dosya geçerli bir resim değildir.',
    'This is not a valid IP address.' => 'Bu geçerli bir IP adresi değildir.',
    'This value is not a valid language.' => 'Bu değer geçerli bir lisan değil.',
    'This value is not a valid locale.' => 'Bu değer geçerli bir yer değildir.',
    'This value is not a valid country.' => 'Bu değer geçerli bir ülke değildir.',
    'This value is already used.' => 'Bu değer şu anda kullanımda.',
    'The size of the image could not be detected.' => 'Resmin boyutu saptanamıyor.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Resmin genişliği çok büyük ({{ width }}px). İzin verilen en büyük genişlik {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Resmin genişliği çok küçük ({{ width }}px). En az {{ min_width }}px olmalıdır.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Resmin yüksekliği çok büyük ({{ height }}px). İzin verilen en büyük yükseklik {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Resmin yüksekliği çok küçük ({{ height }}px). En az {{ min_height }}px olmalıdır.',
    'This value should be the user\'s current password.' => 'Bu değer kullanıcının şu anki şifresi olmalıdır.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Bu değer tam olarak {{ limit }} karakter olmaldır.',
    'The file was only partially uploaded.' => 'Dosya sadece kısmen yüklendi.',
    'No file was uploaded.' => 'Hiçbir dosya yüklenmedi.',
    'No temporary folder was configured in php.ini.' => 'php.ini içerisinde geçici dizin tanımlanmadı.',
    'Cannot write temporary file to disk.' => 'Geçici dosya diske yazılamıyor.',
    'A PHP extension caused the upload to fail.' => 'Bir PHP eklentisi dosyanın yüklemesini başarısız kıldı.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Bu derlem {{ limit }} veya daha çok eleman içermelidir.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Bu derlem {{ limit }} veya daha az eleman içermelidir.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Bu derlem {{ limit }} eleman içermelidir.',
    'Invalid card number.' => 'Geçersiz kart numarası.',
    'Unsupported card type or invalid card number.' => 'Desteklenmeyen kart tipi veya geçersiz kart numarası.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Bir yetkilendirme istisnası oluştu.',
    'Authentication credentials could not be found.' => 'Yetkilendirme girdileri bulunamadı.',
    'Authentication request could not be processed due to a system problem.' => 'Bir sistem hatası nedeniyle yetkilendirme isteği işleme alınamıyor.',
    'Invalid credentials.' => 'Geçersiz girdiler.',
    'Cookie has already been used by someone else.' => 'Çerez bir başkası tarafından zaten kullanılmıştı.',
    'Not privileged to request the resource.' => 'Kaynak talebi için imtiyaz bulunamadı.',
    'Invalid CSRF token.' => 'Geçersiz CSRF fişi.',
    'Digest nonce has expired.' => 'Derleme zaman aşımı gerçekleşti.',
    'No authentication provider found to support the authentication token.' => 'Yetkilendirme fişini destekleyecek yetkilendirme sağlayıcısı bulunamadı.',
    'No session available, it either timed out or cookies are not enabled.' => 'Oturum bulunamadı, zaman aşımına uğradı veya çerezler etkin değil.',
    'No token could be found.' => 'Bilet bulunamadı.',
    'Username could not be found.' => 'Kullanıcı adı bulunamadı.',
    'Account has expired.' => 'Hesap zaman aşımına uğradı.',
    'Credentials have expired.' => 'Girdiler zaman aşımına uğradı.',
    'Account is disabled.' => 'Hesap devre dışı bırakılmış.',
    'Account is locked.' => 'Hesap kilitlenmiş.',
  ),
));

$catalogueEn_US = new MessageCatalogue('en_US', array (
));
$catalogue->addFallbackCatalogue($catalogueEn_US);

return $catalogue;
