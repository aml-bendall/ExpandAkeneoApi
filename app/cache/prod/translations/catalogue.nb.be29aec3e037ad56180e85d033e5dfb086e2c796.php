<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('nb', array (
  'validators' => 
  array (
    'This value should be false.' => 'Verdien skal være falsk.',
    'This value should be true.' => 'Verdien skal være sann.',
    'This value should be of type {{ type }}.' => 'Verdien skal være av typen {{ type }}.',
    'This value should be blank.' => 'Verdien skal være blank.',
    'The value you selected is not a valid choice.' => 'Verdien skal være en av de gitte valg.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du skal velge minst {{ limit }} valg.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan maks velge {{ limit }} valg.',
    'One or more of the given values is invalid.' => 'En eller flere av de oppgitte verdier er ugyldige.',
    'This field was not expected.' => 'Dette feltet ikke var forventet.',
    'This field is missing.' => 'Dette feltet mangler.',
    'This value is not a valid date.' => 'Verdien er ikke en gyldig dato.',
    'This value is not a valid datetime.' => 'Verdien er ikke en gyldig dato og tid.',
    'This value is not a valid email address.' => 'Verdien er ikke en gyldig e-mail adresse.',
    'The file could not be found.' => 'Filen kunne ikke finnes.',
    'The file is not readable.' => 'Filen kan ikke leses.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor ({{ size }} {{ suffix }}). Tilatte maksimale størrelse {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mimetypen av filen er ugyldig ({{ type }}). Tilatte mimetyper er {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Verdien skal være {{ limit }} eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Verdien er for lang. Den skal ha {{ limit }} bokstaver eller mindre.',
    'This value should be {{ limit }} or more.' => 'Verdien skal være {{ limit }} eller mer.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Verdien er for kort. Den skal ha {{ limit }} tegn eller flere.',
    'This value should not be blank.' => 'Verdien må ikke være blank.',
    'This value should not be null.' => 'Verdien må ikke være tom (null).',
    'This value should be null.' => 'Verdien skal være tom (null).',
    'This value is not valid.' => 'Verdien er ikke gyldig.',
    'This value is not a valid time.' => 'Verdien er ikke en gyldig tid.',
    'This value is not a valid URL.' => 'Verdien er ikke en gyldig URL.',
    'The two values should be equal.' => 'De to verdier skal være ens.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor. Den maksimale størrelse er {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Filen er for stor.',
    'The file could not be uploaded.' => 'Filen kunne ikke lastes opp.',
    'This value should be a valid number.' => 'Denne verdi skal være et gyldig tall.',
    'This file is not a valid image.' => 'Denne filen er ikke et gyldig bilde.',
    'This is not a valid IP address.' => 'Dette er ikke en gyldig IP adresse.',
    'This value is not a valid language.' => 'Denne verdi er ikke et gyldig språk.',
    'This value is not a valid locale.' => 'Denne verdi er ikke en gyldig lokalitet.',
    'This value is not a valid country.' => 'Denne verdi er ikke et gyldig land.',
    'This form should not contain extra fields.' => 'Feltgruppen må ikke inneholde ekstra felter.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den opplastede file var for stor. Vennligst last opp en mindre fil.',
    'The CSRF token is invalid.' => 'CSRF nøkkelen er ugyldig.',
  ),
));

$catalogueEn_US = new MessageCatalogue('en_US', array (
));
$catalogue->addFallbackCatalogue($catalogueEn_US);

return $catalogue;
