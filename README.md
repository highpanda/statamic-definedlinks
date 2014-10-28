statamic-definedlinks
=====================

Simple hook that allows the use of the Redactor Predefined Links plugin.

1. Download or clone this repository
2. Rename the folder to *"definedlinks"* and place it in *_add-ons*
3. Define the links you'd like to use in defined-links.json
4. At the bottom of *_config/bundles/redactor/redactor.yaml*, add the following:

```definedLinks: '/_add-ons/definedlinks/defined-links.json'
plugins: ['definedlinks']```
