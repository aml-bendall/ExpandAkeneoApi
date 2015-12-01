<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hy', array (
  'validators' => 
  array (
    'This value should be false.' => 'Արժեքը պետք է լինի կեղծ.',
    'This value should be true.' => 'Արժեքը պետք է լինի ճշմարիտ.',
    'This value should be of type {{ type }}.' => 'Արժեքը պետք է լինի {{ type }} տեսակի.',
    'This value should be blank.' => 'Արժեքը պետք է լինի դատարկ.',
    'The value you selected is not a valid choice.' => 'Ձեր ընտրած արժեքը անթույլատրելի է.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Դուք պետք է ընտրեք ամենաքիչը {{ limit }} տարբերակներ.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Դուք պետք է ընտրեք ոչ ավելի քան {{ limit }} տարբերակներ.',
    'One or more of the given values is invalid.' => 'Մեկ կամ ավելի տրված արժեքները անթույլատրելի են.',
    'This field was not expected.' => 'Այս դաշտը չի սպասվում.',
    'This field is missing.' => 'Այս դաշտը բացակայում է.',
    'This value is not a valid date.' => 'Արժեքը սխալ ամսաթիվ է.',
    'This value is not a valid datetime.' => 'Ամսաթվի և ժամանակի արժեքը անթույլատրելի է.',
    'This value is not a valid email address.' => 'Էլ-փոստի արժեքը անթույլատրելի է.',
    'The file could not be found.' => 'Ֆայլը չի գտնվել.',
    'The file is not readable.' => 'Ֆայլը անընթեռնելի է.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ֆայլը չափազանց մեծ է ({{ size }} {{ suffix }}): Մաքսիմալ թույլատրելի չափսը՝ {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-տեսակը անթույլատրելի է({{ type }}): Ֆայլերի թույլատրելի MIME-տեսակներն են: {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Արժեքը պետք է լինի {{ limit }} կամ փոքր.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Արժեքը չափազանց երկար է: Պետք է լինի {{ limit }} կամ ավել սիմվոլներ.',
    'This value should be {{ limit }} or more.' => 'Արժեքը պետ է լինի {{ limit }} կամ շատ.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Արժեքը չափազանց կարճ է: Պետք է լինի {{ limit }} կամ ավելի սիմվոլներ.',
    'This value should not be blank.' => 'Արժեքը չպետք է դատարկ լինի.',
    'This value should not be null.' => 'Արժեքը չպետք է լինի null.',
    'This value should be null.' => 'Արժեքը պետք է լինի null.',
    'This value is not valid.' => 'Անթույլատրելի արժեք.',
    'This value is not a valid time.' => 'Ժամանակի արժեքը անթույլատրելի է.',
    'This value is not a valid URL.' => 'Արժեքը  URL  չէ.',
    'The two values should be equal.' => 'Երկու արժեքները պետք է նույնը լինեն.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ֆայլը չափազանց մեծ է: Մաքսիմալ թույլատրելի չափսը {{ limit }} {{ suffix }} է.',
    'The file is too large.' => 'Ֆայլը չափազանց մեծ է.',
    'The file could not be uploaded.' => 'Ֆայլը չի կարող բեռնվել.',
    'This value should be a valid number.' => 'Արժեքը պետք է լինի թիվ.',
    'This value is not a valid country.' => 'Արժեքը պետք է լինի երկիր.',
    'This file is not a valid image.' => 'Ֆայլը նկարի թույլատրելի ֆորմատ չէ.',
    'This is not a valid IP address.' => 'Արժեքը թույլատրելի IP հասցե չէ.',
    'This value is not a valid language.' => 'Արժեքը թույլատրելի լեզու չէ.',
    'This value is not a valid locale.' => 'Արժեքը չի հանդիսանում թույլատրելի տեղայնացում.',
    'This value is already used.' => 'Այդ արժեքը արդեն օգտագործվում է.',
    'The size of the image could not be detected.' => 'Նկարի չափսերը չստացվեց որոշել.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Նկարի լայնությունը չափազանց մեծ է({{ width }}px). Մաքսիմալ չափն է {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Նկարի լայնությունը չափազանց փոքր է ({{ width }}px). Մինիմալ չափն է {{ min_ width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Նկարի բարձրությունը չափազանց մեծ է ({{ height }}px). Մաքսիմալ չափն է {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Նկարի բարձրությունը չափազանց փոքր է ({{ height }}px). Մինիմալ չափն է {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Այս արժեքը պետք է լինի օգտագործողի ներկա ծածկագիրը.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Այս արժեքը պետք է ունենա ճիշտ {{ limit }} սիմվոլներ.',
    'This form should not contain extra fields.' => 'Այս ձևը չպետք է պարունակի լրացուցիչ տողեր.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Վերբեռնված ֆայլը չափազանց մեծ է: Խնդրվում է վերբեռնել ավելի փոքր չափսի ֆայլ.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF արժեքը անթույլատրելի է: Փորձեք նորից ուղարկել ձևը.',
  ),
));

$catalogueEn_US = new MessageCatalogue('en_US', array (
));
$catalogue->addFallbackCatalogue($catalogueEn_US);

return $catalogue;
