<?php
// Declare contactlayout angular module

function getActiveRelationshipTypes() {
  return (array) Civi\Api4\RelationshipType::get()
    ->addWhere('is_active', '=', TRUE)
    ->execute();
}

return [
  'js' => [
    'ang/contactlayout/*.js',
    'ang/contactlayout/*/*.js',
  ],
  'css' => [
    'ang/contactlayout.css',
  ],
  'partials' => [
    'ang/contactlayout',
  ],
  'settings' => [
    'relationshipTypes' => getActiveRelationshipTypes(),
  ],
  'requires' => ['crmUi', 'crmUtil', 'ngRoute', 'ui.sortable', 'api4'],
];
