statamic-definedlinks
=====================

Simple hook that bastardizes the use of the Redactor Predefined Links plugin. This plugin generates a list of all entries and pages which can be selected.

1. Download or clone this repository
2. Rename the folder to **"definedlinks"** and place it in **_add-ons**
3. At the bottom of **_config/bundles/redactor/redactor.yaml**, add the following:

```yaml
definedLinks: '/_add-ons/definedlinks/defined-links.json'
plugins: ['definedlinks']
```
