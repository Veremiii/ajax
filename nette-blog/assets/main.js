// Initialize Nette Forms on page load
import netteForms from 'nette-forms';

netteForms.initOnLoad();

// We need Naja package to use AJAX in nette project
import naja from 'naja';

naja.initialize();
