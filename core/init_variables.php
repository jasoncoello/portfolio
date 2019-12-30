<?php
  define('SKILLS', [
    [
      'title' => 'Programming Language',
      'items' => [
        ['title' => 'PHP', 'value' => 100],
        ['title' => 'Python', 'value' => 90],
        ['title' => 'Ruby', 'value' => 85],
        ['title' => 'Golang', 'value' => 80],
        ['title' => 'Haskell', 'value' => 85],
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
        ['title' => 'Vue.js', 'value' => 90],
        ['title' => 'Express.js', 'value' => 96],
        ['title' => 'Meteor', 'value' => 95],
        ['title' => 'Ember.js', 'value' => 88],
        ['title' => 'Backbone.js', 'value' => 89],
        ['title' => 'jQuery', 'value' => 100],
        ['title' => 'Webpack', 'value' => 90],
        ['title' => 'ESLint', 'value' => 90]
      ]
    ],
    [
      'title' => 'Mobile Techs',
      'items' => [
        ['title' => 'Swift', 'value' => 87],
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
        ['title' => 'Wordpress', 'value' => 100],
        ['title' => 'WooCommerce', 'value' => 100],
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
      'link' => 'https://apps.apple.com/us/app/relovv/id1423371947'
    ],
    [ 
      'category' => 'cms',
      'title' => 'Fantasy Football Blueprint',
      'description' => 'Wordpress, API',
      'image' => 'img/portfolio/fantasy.jpg',
      'link' => 'https://www.fantasyfootballblueprint.com/'
    ],
    [
      'category' => 'ecommerce cms',
      'title' => 'LEVO Oil Infusion',
      'description' => 'Wordpress, Shopify',
      'image' => 'img/portfolio/levo.jpg',
      'link' => 'https://levooil.com/'
    ],
    [
      'category' => 'cms extra',
      'title' => 'AI Enabled Fraud Detection Engine',
      'description' => 'Wordpress, HubSpot',
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