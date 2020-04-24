<?php
  define('SKILLS', [
    [
      'title' => 'Programming Language',
      'items' => [
        ['title' => 'PHP', 'value' => 100],
        ['title' => 'Python', 'value' => 90],
        ['title' => 'Ruby', 'value' => 85],
        ['title' => 'Golang', 'value' => 80],
        ['title' => 'Purescript', 'value' => 88],
        ['title' => 'Javascript', 'value' => 100],
        ['title' => 'HTML5', 'value' => 100],
        ['title' => 'CSS3 (Sass, SCSS, Less)', 'value' => 100]
      ]
    ],
    [
      'title' => 'Query Language',
      'items' => [
        ['title' => 'GraphQL', 'value' => 92],
        ['title' => 'SQL', 'value' => 94]
      ]
    ],
    [
      'title' => 'JS Techs',
      'items' => [
        ['title' => 'Node.js', 'value' => 96],
        ['title' => 'Angular', 'value' => 90],
        ['title' => 'React', 'value' => 99],
        ['title' => 'Redux', 'value' => 92],
        ['title' => 'Vue.js', 'value' => 90],
        ['title' => 'Express.js', 'value' => 96],
        ['title' => 'Meteor', 'value' => 95],
        ['title' => 'Ember.js', 'value' => 88],
        ['title' => 'jQuery', 'value' => 100],
        ['title' => 'WebPack', 'value' => 90],
        ['title' => 'ESLint', 'value' => 90]
      ]
    ],
    [
      'title' => 'Mobile Techs',
      'items' => [
        ['title' => 'Swift', 'value' => 93],
        ['title' => 'Objective-C', 'value' => 87],
        ['title' => 'Java', 'value' => 91],
        ['title' => 'React Native', 'value' => 95],
        ['title' => 'Ionic', 'value' => 90]
      ]
    ],
    [
      'title' => 'Frameworks',
      'items' => [
        ['title' => 'Laravel', 'value' => 100],
        ['title' => 'Ruby on Rails', 'value' => 88],
        ['title' => 'Symfony', 'value' => 95],
        ['title' => 'Codeigniter', 'value' => 100],
        ['title' => 'Zend', 'value' => 100],
        ['title' => 'Django', 'value' => 90],
        ['title' => 'Flask', 'value' => 95]
      ]
    ],
    [
      'title' => 'CMS & E-commerce Platforms',
      'items' => [
        ['title' => 'WordPress', 'value' => 100],
        ['title' => 'WooCommerce', 'value' => 100],
        ['title' => 'BigCommerce', 'value' => 95],
        ['title' => 'Shopify', 'value' => 90],
        ['title' => 'Magento', 'value' => 80],
      ]
    ],
    [
      'title' => 'Database',
      'items' => [
        ['title' => 'MySQL', 'value' => 100],
        ['title' => 'PostgreSQL', 'value' => 90],
        ['title' => 'MongoDB', 'value' => 95],
        ['title' => 'MariaDB', 'value' => 100],
        ['title' => 'DynamoDB', 'value' => 91]
      ]
    ],
    [
      'title' => 'Unit Tests',
      'items' => [
        ['title' => 'Jasmine', 'value' => 95],
        ['title' => 'Mocha', 'value' => 97],
        ['title' => 'Enzyme', 'value' => 90],
        ['title' => 'Jest', 'value' => 91]
      ]
    ],
    [
      'title' => 'Blockchain / Cryptocurrency',
      'items' => [
        ['title' => 'Solidity', 'value' => 97],
        ['title' => 'Truffle', 'value' => 97],
        ['title' => 'Ganache', 'value' => 95],
        ['title' => 'Infura', 'value' => 95],
        ['title' => 'Geth', 'value' => 93],
        ['title' => 'Hyperledger', 'value' => 81]
      ]
    ],
    [
      'title' => 'Extra',
      'items' => [
        ['title' => 'Firebase', 'value' => 90],
        ['title' => 'ElasticSearch', 'value' => 90],
        ['title' => 'Zapier', 'value' => 99],
        ['title' => 'HubSpot', 'value' => 95],
        ['title' => 'Wix', 'value' => 91],
        ['title' => 'Webflow', 'value' => 90],
        ['title' => 'Klaviyo', 'value' => 88],
        ['title' => 'PubNub', 'value' => 99],
        ['title' => 'Heroku', 'value' => 99],
        ['title' => 'Kubernetes', 'value' => 80],
        ['title' => 'AWS', 'value' => 92]
      ]
    ]
  ]);
  
  define('PORTFOLIO_CATS', [
    'framework' => 'Framework',
    'library' => 'JS Library',
    'ecommerce' => 'E-Commerce',
    'mvc' => 'MVC',
    'mobile' => 'Mobile',
    'cms' => 'CMS',
    'extra' => 'Extra'
  ]);

  define('PORTFOLIOS', [
    [
      'category' => 'ecommerce library framework cms extra',
      'title' => 'WAFT Custom Fragrance',
      'description' => 'Angular 8, Node, MongoDB, BigCommerce, Klaviyo, HubSpot',
      'image' => 'img/portfolio/waft.jpg',
      'link' => 'https://waft.com'
    ],
    [
      'category' => 'cms',
      'title' => 'Villari TV',
      'description' => 'Drupal',
      'image' => 'img/portfolio/villari.jpg',
      'link' => 'https://villari.tv'
    ],
    [
      'category' => 'library ecommerce cms extra',
      'title' => 'Shop Levooil',
      'description' => 'WordPress, Shopify',
      'image' => 'img/portfolio/shop.jpg',
      'link' => 'https://shop.levooil.com'
    ],
    [
      'category' => 'cms ecommerce',
      'title' => 'Seedolab',
      'description' => 'WordPress, WooCommerce',
      'image' => 'img/portfolio/seedo.jpg',
      'link' => 'https://seedolab.com'
    ],
    [
      'category' => 'cms',
      'title' => 'Ramboll Shair',
      'description' => 'WordPress',
      'image' => 'img/portfolio/rambollwp.jpg',
      'link' => 'https://ramboll-shair.com'
    ],
    [
      'category' => 'ecommerce library extra',
      'title' => 'Quire',
      'description' => 'PHP, HTML5, CSS3, jQuery, WordPress Core Functions',
      'image' => 'img/portfolio/quire.jpg',
      'link' => 'https://quire.123consultingsolutions.com'
    ],
    [
      'category' => 'ecommerce cms library extra',
      'title' => 'WAFT Custom Fragrance',
      'description' => 'WordPress, Webflow, Node Back-end, Klaviyo, BigCommerce',
      'image' => 'img/portfolio/pages.jpg',
      'link' => 'https://pages.waft.com/waft-gifting-landing'
    ],
    [
      'category' => 'ecommerce framework cms',
      'title' => 'Madlady',
      'description' => 'Magento',
      'image' => 'img/portfolio/madlady.jpg',
      'link' => 'https://madlady.se'
    ],
    [
      'category' => 'mobile library mvc extra',
      'title' => 'HereNow',
      'description' => 'React Native, Redux, Firebase, Laravel',
      'image' => 'img/portfolio/herenow.jpg',
      'link' => 'https://www.herenow.com'
    ],
    [
      'category' => 'ecommerce cms',
      'title' => 'Anandaprofessional',
      'description' => 'WordPress, WooCommerce',
      'image' => 'img/portfolio/ananda.jpg',
      'link' => 'https://anandaprofessional.com'
    ],
    [
      'category' => 'ecommerce cms',
      'title' => '123 Online Courses',
      'description' => 'WordPress, Divi, Stripe, LMS',
      'image' => 'img/portfolio/123online.jpg',
      'link' => 'https://123onlinecourses.com'
    ],
    [
      'category' => 'ecommerce cms',
      'title' => '123 Consulting Solutions',
      'description' => 'WordPress, Wufoo, LMS',
      'image' => 'img/portfolio/123consulting.jpg',
      'link' => 'https://123consultingsolutions.com'
    ],
    [
      'category' => 'ecommerce mvc library extra',
      'title' => 'Relovv Fashion Community',
      'description' => 'Laravel, Vue.js, Firebase, PubNub on AWS',
      'image' => 'img/portfolio/relovv.jpg',
      'link' => 'https://relovv.com'
    ],
    [
      'category' => 'framework library extra',
      'title' => 'Ramboll Shair',
      'description' => 'Meteor, React, Mapbox',
      'image' => 'img/portfolio/ramboll.jpg',
      'link' => 'https://app.ramboll-shair.com'
    ],
    [
      'category' => 'mobile',
      'title' => 'Relovv Mobile App',
      'description' => 'Swipe, Shop. Sell.',
      'image' => 'img/portfolio/relovvmobile.jpg',
      'link' => '#'
    ],
    [ 
      'category' => 'cms',
      'title' => 'Fantasy Football Blueprint',
      'description' => 'WordPress, API',
      'image' => 'img/portfolio/fantasy.jpg',
      'link' => 'https://www.fantasyfootballblueprint.com/'
    ],
    [
      'category' => 'ecommerce cms',
      'title' => 'LEVO Oil Infusion',
      'description' => 'WordPress, Shopify',
      'image' => 'img/portfolio/levo.jpg',
      'link' => 'https://levooil.com/'
    ],
    [
      'category' => 'cms extra',
      'title' => 'AI Enabled Fraud Detection Engine',
      'description' => 'WordPress, HubSpot',
      'image' => 'img/portfolio/snappt.jpg',
      'link' => 'https://www.snappt.com/'
    ],
    [
      'category' => 'ecommerce',
      'title' => 'Public Goods',
      'description' => 'Shopify',
      'image' => 'img/portfolio/public.jpg',
      'link' => 'https://www.publicgoods.com/'
    ],
    [
      'category' => 'extra',
      'title' => 'B2B Marketing Agency',
      'description' => 'HubSpot',
      'image' => 'img/portfolio/connect.jpg',
      'link' => 'https://www.connectmarketing.com/'
    ],
    [
      'category' => 'framework',
      'title' => 'NAI Partners',
      'description' => 'Angular Dashboard',
      'image' => 'img/portfolio/nai.jpg',
      'link' => 'https://commute.naipartners.com/'
    ],
    [
      'category' => 'ecommerce mvc framework',
      'title' => 'GoPrep - Meal Prep Ordering Platform',
      'description' => 'Laravel, Vue.js',
      'image' => 'img/portfolio/goprep.jpg',
      'link' => 'https://www.goprep.com/'
    ],
    [
      'category' => 'framework',
      'title' => 'National Museum of the Surface Navy',
      'description' => 'ASP .NET, Bootstrap',
      'image' => 'img/portfolio/wicked.jpg',
      'link' => 'https://nmsn.wickedcode.com/'
    ],
    [
      'category' => 'framework',
      'title' => 'USA Today Redesign',
      'description' => 'Angular',
      'image' => 'img/portfolio/usa.jpg',
      'link' => 'http://usatoday.geex-arts.com/'
    ],
    [
      'category' => 'extra',
      'title' => 'Make It Driveable',
      'description' => 'Wix',
      'image' => 'img/portfolio/makeit.jpg',
      'link' => 'https://www.makeitdriveable.com/'
    ]
  ]);
?>