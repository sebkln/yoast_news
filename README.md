# Yoast SEO for TYPO3 - EXT:news
With this simple plugin, you integrate Yoast SEO for TYPO3 in EXT:news. 

## Installation and configuration
You can install the plugin by composer or by the Extension manager. Not many configuration is needed. 

1. Install this extension by composer / Extension manager.
2. Include the **Static TypoScript file** `Yoast for EXT:news` in your TypoScript root template.
3. Include the **Page TSConfig file** `Yoast for EXT:news` in the page properties of your root page.
4. Set your **detail page ID** in your own Page TSconfig file. `TCEMAIN.preview.tx_news_domain_model_news.previewPageId = x`. 
Where x is the id of your detail page!
