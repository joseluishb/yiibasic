<?php

use yii\db\Migration;

/**
 * Class m210108_143119_create_table_country
 */
class m210108_143119_create_table_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('country', [
            'id' => $this->primaryKey()->unsigned(),
            'code' => $this->string(2)->unique()->notNull(),
            'name' => $this->string(80),
            'phonecode' => $this->integer(5),
            'lat' => $this->string(45)->notNull(),
            'lng' => $this->string(45)->notNull(),

        ]);

        $this->batchInsert('country', ['id', 'code', 'name', 'phonecode', 'lat', 'lng'], [
            ['1', 'AF', 'Afghanistan', '93', '33.93911', '67.709953'],
            ['2', 'AL', 'Albania', '355', '41.153332', '20.168331'],
            ['3', 'DZ', 'Algeria', '213', '28.033886', '1.659626'],
            ['4', 'AS', 'American Samoa', '1684', '-14.270972', '-170.132217'],
            ['5', 'AD', 'Andorra', '376', '42.546245', '1.601554'],
            ['6', 'AO', 'Angola', '244', '-11.202692', '17.873887'],
            ['7', 'AI', 'Anguilla', '1264', '18.220554', '-63.068615'],
            ['8', 'AQ', 'Antarctica', '0', '-75.250973', '-0.071389'],
            ['9', 'AG', 'Antigua and Barbuda', '1268', '17.060816', '-61.796428'],
            ['10', 'AR', 'Argentina', '54', '-38.416097', '-63.616672'],
            ['11', 'AM', 'Armenia', '374', '40.069099', '45.038189'],
            ['12', 'AW', 'Aruba', '297', '12.52111', '-69.968338'],
            ['13', 'AU', 'Australia', '61', '-25.274398', '133.775136'],
            ['14', 'AT', 'Austria', '43', '47.516231', '14.550072'],
            ['15', 'AZ', 'Azerbaijan', '994', '40.143105', '47.576927'],
            ['16', 'BS', 'Bahamas', '1242', '25.03428', '-77.39628'],
            ['17', 'BH', 'Bahrain', '973', '25.930414', '50.637772'],
            ['18', 'BD', 'Bangladesh', '880', '23.684994', '90.356331'],
            ['19', 'BB', 'Barbados', '1246', '13.193887', '-59.543198'],
            ['20', 'BY', 'Belarus', '375', '53.709807', '27.953389'],
            ['21', 'BE', 'Belgium', '32', '50.503887', '4.469936'],
            ['22', 'BZ', 'Belize', '501', '17.189877', '-88.49765'],
            ['23', 'BJ', 'Benin', '229', '9.30769', '2.315834'],
            ['24', 'BM', 'Bermuda', '1441', '32.321384', '-64.75737'],
            ['25', 'BT', 'Bhutan', '975', '27.514162', '90.433601'],
            ['26', 'BO', 'Bolivia', '591', '-16.290154', '-63.588653'],
            ['27', 'BA', 'Bosnia and Herzegovina', '387', '43.915886', '17.679076'],
            ['28', 'BW', 'Botswana', '267', '-22.328474', '24.684866'],
            ['29', 'BV', 'Bouvet Island', '0', '-54.423199', '3.413194'],
            ['30', 'BR', 'Brazil', '55', '-14.235004', '-51.92528'],
            ['31', 'IO', 'British Indian Ocean Territory', '246', '-6.343194', '71.876519'],
            ['32', 'BN', 'Brunei Darussalam', '673', '4.535277', '114.727669'],
            ['33', 'BG', 'Bulgaria', '359', '42.733883', '25.48583'],
            ['34', 'BF', 'Burkina Faso', '226', '12.238333', '-1.561593'],
            ['35', 'BI', 'Burundi', '257', '-3.373056', '29.918886'],
            ['36', 'KH', 'Cambodia', '855', '12.565679', '104.990963'],
            ['37', 'CM', 'Cameroon', '237', '7.369722', '12.354722'],
            ['38', 'CA', 'Canada', '1', '56.130366', '-106.346771'],
            ['39', 'CV', 'Cape Verde', '238', '16.002082', '-24.013197'],
            ['40', 'KY', 'Cayman Islands', '1345', '19.513469', '-80.566956'],
            ['41', 'CF', 'Central African Republic', '236', '6.611111', '20.939444'],
            ['42', 'TD', 'Chad', '235', '15.454166', '18.732207'],
            ['43', 'CL', 'Chile', '56', '-35.675147', '-71.542969'],
            ['44', 'CN', 'China', '86', '35.86166', '104.195397'],
            ['45', 'CX', 'Christmas Island', '61', '-10.447525', '105.690449'],
            ['46', 'CC', 'Cocos (Keeling) Islands', '672', '-12.164165', '96.870956'],
            ['47', 'CO', 'Colombia', '57', '4.570868', '-74.297333'],
            ['48', 'KM', 'Comoros', '269', '-11.875001', '43.872219'],
            ['49', 'CG', 'Congo', '242', '-0.228021', '15.827659'],
            ['51', 'CK', 'Cook Islands', '682', '-21.236736', '-159.777671'],
            ['52', 'CR', 'Costa Rica', '506', '9.748917', '-83.753428'],
            ['53', 'CI', 'Cote d\'Ivoire', '225', '7.539989', '-5.54708'],
            ['54', 'HR', 'Croatia', '385', '45.1', '15.2'],
            ['55', 'CU', 'Cuba', '53', '21.521757', '-77.781167'],
            ['56', 'CY', 'Cyprus', '357', '35.126413', '33.429859'],
            ['57', 'CZ', 'Czech Republic', '420', '49.817492', '15.472962'],
            ['58', 'DK', 'Denmark', '45', '56.26392', '9.501785'],
            ['59', 'DJ', 'Djibouti', '253', '11.825138', '42.590275'],
            ['60', 'DM', 'Dominica', '1767', '15.414999', '-61.370976'],
            ['61', 'DO', 'Dominican Republic', '1809', '18.735693', '-70.162651'],
            ['62', 'EC', 'Ecuador', '593', '-1.831239', '-78.183406'],
            ['63', 'EG', 'Egypt', '20', '26.820553', '30.802498'],
            ['64', 'SV', 'El Salvador', '503', '13.794185', '-88.89653'],
            ['65', 'GQ', 'Equatorial Guinea', '240', '1.650801', '10.267895'],
            ['66', 'ER', 'Eritrea', '291', '15.179384', '39.782334'],
            ['67', 'EE', 'Estonia', '372', '58.595272', '25.013607'],
            ['68', 'ET', 'Ethiopia', '251', '9.145', '40.489673'],
            ['69', 'FK', 'Falkland Islands (Malvinas)', '500', '-51.796253', '-59.523613'],
            ['70', 'FO', 'Faroe Islands', '298', '61.892635', '-6.911806'],
            ['71', 'FJ', 'Fiji', '679', '-16.578193', '179.414413'],
            ['72', 'FI', 'Finland', '358', '61.92411', '25.748151'],
            ['73', 'FR', 'France', '33', '46.227638', '2.213749'],
            ['74', 'GF', 'French Guiana', '594', '3.933889', '-53.125782'],
            ['75', 'PF', 'French Polynesia', '689', '-17.679742', '-149.406843'],
            ['76', 'TF', 'French Southern Territories', '0', '-49.280366', '69.348557'],
            ['77', 'GA', 'Gabon', '241', '-0.803689', '11.609444'],
            ['78', 'GM', 'Gambia', '220', '13.443182', '-15.310139'],
            ['79', 'GE', 'Georgia', '995', '42.315407', '43.356892'],
            ['80', 'DE', 'Germany', '49', '51.165691', '10.451526'],
            ['81', 'GH', 'Ghana', '233', '7.946527', '-1.023194'],
            ['82', 'GI', 'Gibraltar', '350', '36.137741', '-5.345374'],
            ['83', 'GR', 'Greece', '30', '39.074208', '21.824312'],
            ['84', 'GL', 'Greenland', '299', '71.706936', '-42.604303'],
            ['85', 'GD', 'Grenada', '1473', '12.262776', '-61.604171'],
            ['86', 'GP', 'Guadeloupe', '590', '16.995971', '-62.067641'],
            ['87', 'GU', 'Guam', '1671', '13.444304', '144.793731'],
            ['88', 'GT', 'Guatemala', '502', '15.783471', '-90.230759'],
            ['89', 'GN', 'Guinea', '224', '9.945587', '-9.696645'],
            ['90', 'GW', 'Guinea-Bissau', '245', '11.803749', '-15.180413'],
            ['91', 'GY', 'Guyana', '592', '4.860416', '-58.93018'],
            ['92', 'HT', 'Haiti', '509', '18.971187', '-72.285215'],
            ['93', 'HM', 'Heard Island and Mcdonald Islands', '0', '-53.08181', '73.504158'],
            ['94', 'VA', 'Holy See (Vatican City State)', '39', '41.902916', '12.453389'],
            ['95', 'HN', 'Honduras', '504', '15.199999', '-86.241905'],
            ['96', 'HK', 'Hong Kong', '852', '22.396428', '114.109497'],
            ['97', 'HU', 'Hungary', '36', '47.162494', '19.503304'],
            ['98', 'IS', 'Iceland', '354', '64.963051', '-19.020835'],
            ['99', 'IN', 'India', '91', '20.593684', '78.96288'],
            ['100', 'ID', 'Indonesia', '62', '-0.789275', '113.921327'],
            ['101', 'IR', 'Iran', '98', '32.427908', '53.688046'],
            ['102', 'IQ', 'Iraq', '964', '33.223191', '43.679291'],
            ['103', 'IE', 'Ireland', '353', '53.41291', '-8.24389'],
            ['104', 'IL', 'Israel', '972', '31.046051', '34.851612'],
            ['105', 'IT', 'Italy', '39', '41.87194', '12.56738'],
            ['106', 'JM', 'Jamaica', '1876', '18.109581', '-77.297508'],
            ['107', 'JP', 'Japan', '81', '36.204824', '138.252924'],
            ['108', 'JO', 'Jordan', '962', '30.585164', '36.238414'],
            ['109', 'KZ', 'Kazakhstan', '7', '48.019573', '66.923684'],
            ['110', 'KE', 'Kenya', '254', '-0.023559', '37.906193'],
            ['111', 'KI', 'Kiribati', '686', '-3.370417', '-168.734039'],
            ['112', 'KP', 'North Korea', '850', '40.339852', '127.510093'],
            ['113', 'KR', 'South Korea', '82', '35.907757', '127.766922'],
            ['114', 'KW', 'Kuwait', '965', '29.31166', '47.481766'],
            ['115', 'KG', 'Kyrgyzstan', '996', '41.20438', '74.766098'],
            ['116', 'LA', 'Laos', '856', '19.85627', '102.495496'],
            ['117', 'LV', 'Latvia', '371', '56.879635', '24.603189'],
            ['118', 'LB', 'Lebanon', '961', '33.854721', '35.862285'],
            ['119', 'LS', 'Lesotho', '266', '-29.609988', '28.233608'],
            ['120', 'LR', 'Liberia', '231', '6.428055', '-9.429499'],
            ['121', 'LY', 'Libya', '218', '26.3351', '17.228331'],
            ['122', 'LI', 'Liechtenstein', '423', '47.166', '9.555373'],
            ['123', 'LT', 'Lithuania', '370', '55.169438', '23.881275'],
            ['124', 'LU', 'Luxembourg', '352', '49.815273', '6.129583'],
            ['125', 'MO', 'Macau', '853', '22.198745', '113.543873'],
            ['126', 'MK', 'Macedonia', '389', '41.608635', '21.745275'],
            ['127', 'MG', 'Madagascar', '261', '-18.766947', '46.869107'],
            ['128', 'MW', 'Malawi', '265', '-13.254308', '34.301525'],
            ['129', 'MY', 'Malaysia', '60', '4.210484', '101.975766'],
            ['130', 'MV', 'Maldives', '960', '3.202778', '73.22068'],
            ['131', 'ML', 'Mali', '223', '17.570692', '-3.996166'],
            ['132', 'MT', 'Malta', '356', '35.937496', '14.375416'],
            ['133', 'MH', 'Marshall Islands', '692', '7.131474', '171.184478'],
            ['134', 'MQ', 'Martinique', '596', '14.641528', '-61.024174'],
            ['135', 'MR', 'Mauritania', '222', '21.00789', '-10.940835'],
            ['136', 'MU', 'Mauritius', '230', '-20.348404', '57.552152'],
            ['137', 'YT', 'Mayotte', '269', '-12.8275', '45.166244'],
            ['138', 'MX', 'Mexico', '52', '23.634501', '-102.552784'],
            ['139', 'FM', 'Micronesia', '691', '7.425554', '150.550812'],
            ['140', 'MD', 'Moldova', '373', '47.411631', '28.369885'],
            ['141', 'MC', 'Monaco', '377', '43.750298', '7.412841'],
            ['142', 'MN', 'Mongolia', '976', '46.862496', '103.846656'],
            ['143', 'MS', 'Montserrat', '1664', '16.742498', '-62.187366'],
            ['144', 'MA', 'Morocco', '212', '31.791702', '-7.09262'],
            ['145', 'MZ', 'Mozambique', '258', '-18.665695', '35.529562'],
            ['146', 'MM', 'Burma', '95', '21.913965', '95.956223'],
            ['147', 'NA', 'Namibia', '264', '-22.95764', '18.49041'],
            ['148', 'NR', 'Nauru', '674', '-0.522778', '166.931503'],
            ['149', 'NP', 'Nepal', '977', '28.394857', '84.124008'],
            ['150', 'NL', 'Netherlands', '31', '52.132633', '5.291266'],
            ['151', 'AN', 'Netherlands Antilles', '599', '12.226079', '-69.060087'],
            ['152', 'NC', 'New Caledonia', '687', '-20.904305', '165.618042'],
            ['153', 'NZ', 'New Zealand', '64', '-40.900557', '174.885971'],
            ['154', 'NI', 'Nicaragua', '505', '12.865416', '-85.207229'],
            ['155', 'NE', 'Niger', '227', '17.607789', '8.081666'],
            ['156', 'NG', 'Nigeria', '234', '9.081999', '8.675277'],
            ['157', 'NU', 'Niue', '683', '-19.054445', '-169.867233'],
            ['158', 'NF', 'Norfolk Island', '672', '-29.040835', '167.954712'],
            ['159', 'MP', 'Northern Mariana Islands', '1670', '17.33083', '145.38469'],
            ['160', 'NO', 'Norway', '47', '60.472024', '8.468946'],
            ['161', 'OM', 'Oman', '968', '21.512583', '55.923255'],
            ['162', 'PK', 'Pakistan', '92', '30.375321', '69.345116'],
            ['163', 'PW', 'Palau', '680', '7.51498', '134.58252'],
            ['164', 'PS', 'Palestinian Territory', '970', '31.952162', '35.233154'],
            ['165', 'PA', 'Panama', '507', '8.537981', '-80.782127'],
            ['166', 'PG', 'Papua New Guinea', '675', '-6.314993', '143.95555'],
            ['167', 'PY', 'Paraguay', '595', '-23.442503', '-58.443832'],
            ['168', 'PE', 'Peru', '51', '-9.189967', '-75.015152'],
            ['169', 'PH', 'Philippines', '63', '12.879721', '121.774017'],
            ['170', 'PN', 'Pitcairn', '0', '-24.703615', '-127.439308'],
            ['171', 'PL', 'Poland', '48', '51.919438', '19.145136'],
            ['172', 'PT', 'Portugal', '351', '39.399872', '-8.224454'],
            ['173', 'PR', 'Puerto Rico', '1787', '18.220833', '-66.590149'],
            ['174', 'QA', 'Qatar', '974', '25.354826', '51.183884'],
            ['175', 'RE', 'Reunion', '262', '-21.115141', '55.536384'],
            ['176', 'RO', 'Romania', '40', '45.943161', '24.96676'],
            ['177', 'RU', 'Russia', '70', '61.52401', '105.318756'],
            ['178', 'RW', 'Rwanda', '250', '-1.940278', '29.873888'],
            ['179', 'SH', 'Saint Helena', '290', '-24.143474', '-10.030696'],
            ['180', 'KN', 'Saint Kitts and Nevis', '1869', '17.357822', '-62.782998'],
            ['181', 'LC', 'Saint Lucia', '1758', '13.909444', '-60.978893'],
            ['182', 'PM', 'Saint Pierre and Miquelon', '508', '46.941936', '-56.27111'],
            ['183', 'VC', 'Saint Vincent and the Grenadines', '1784', '12.984305', '-61.287228'],
            ['184', 'WS', 'Samoa', '684', '-13.759029', '-172.104629'],
            ['185', 'SM', 'San Marino', '378', '43.94236', '12.457777'],
            ['186', 'ST', 'Sao Tome and Principe', '239', '0.18636', '6.613081'],
            ['187', 'SA', 'Saudi Arabia', '966', '23.885942', '45.079162'],
            ['188', 'SN', 'Senegal', '221', '14.497401', '-14.452362'],
            ['189', 'RS', 'Serbia', '381', '44.016521', '21.005859'],
            ['190', 'SC', 'Seychelles', '248', '-4.679574', '55.491977'],
            ['191', 'SL', 'Sierra Leone', '232', '8.460555', '-11.779889'],
            ['192', 'SG', 'Singapore', '65', '1.352083', '103.819836'],
            ['193', 'SK', 'Slovakia', '421', '48.669026', '19.699024'],
            ['194', 'SI', 'Slovenia', '386', '46.151241', '14.995463'],
            ['195', 'SB', 'Solomon Islands', '677', '-9.64571', '160.156194'],
            ['196', 'SO', 'Somalia', '252', '5.152149', '46.199616'],
            ['197', 'ZA', 'South Africa', '27', '-30.559482', '22.937506'],
            ['198', 'GS', 'South Georgia and the South Sandwich Islands', '0', '-54.429579', '-36.587909'],
            ['199', 'ES', 'Spain', '34', '40.463667', '-3.74922'],
            ['200', 'LK', 'Sri Lanka', '94', '7.873054', '80.771797'],
            ['201', 'SD', 'Sudan', '249', '12.862807', '30.217636'],
            ['202', 'SR', 'Suriname', '597', '3.919305', '-56.027783'],
            ['203', 'SJ', 'Svalbard', '47', '77.553604', '23.670272'],
            ['204', 'SZ', 'Swaziland', '268', '-26.522503', '31.465866'],
            ['205', 'SE', 'Sweden', '46', '60.128161', '18.643501'],
            ['206', 'CH', 'Switzerland', '41', '46.818188', '8.227512'],
            ['207', 'SY', 'Syria', '963', '34.802075', '38.996815'],
            ['208', 'TW', 'Taiwan', '886', '23.69781', '120.960515'],
            ['209', 'TJ', 'Tajikistan', '992', '38.861034', '71.276093'],
            ['210', 'TZ', 'Tanzania', '255', '-6.369028', '34.888822'],
            ['211', 'TH', 'Thailand', '66', '15.870032', '100.992541'],
            ['212', 'TL', 'Timor', '670', '-8.874217', '125.727539'],
            ['213', 'TG', 'Togo', '228', '8.619543', '0.824782'],
            ['214', 'TK', 'Tokelau', '690', '-8.967363', '-171.855881'],
            ['215', 'TO', 'Tonga', '676', '-21.178986', '-175.198242'],
            ['216', 'TT', 'Trinidad and Tobago', '1868', '10.691803', '-61.222503'],
            ['217', 'TN', 'Tunisia', '216', '33.886917', '9.537499'],
            ['218', 'TR', 'Turkey', '90', '38.963745', '35.243322'],
            ['219', 'TM', 'Turkmenistan', '7370', '38.969719', '59.556278'],
            ['220', 'TC', 'Turks and Caicos Islands', '1649', '21.694025', '-71.797928'],
            ['221', 'TV', 'Tuvalu', '688', '-7.109535', '177.64933'],
            ['222', 'UG', 'Uganda', '256', '1.373333', '32.290275'],
            ['223', 'UA', 'Ukraine', '380', '48.379433', '31.16558'],
            ['224', 'AE', 'United Arab Emirates', '971', '23.424076', '53.847818'],
            ['225', 'GB', 'United Kingdom', '44', '55.378051', '-3.435973'],
            ['226', 'US', 'United States', '1', '37.09024', '-95.712891'],
            ['227', 'UM', 'United States Minor Outlying Islands', '1', '19.3000', '166.6333'],
            ['228', 'UY', 'Uruguay', '598', '-32.522779', '-55.765835'],
            ['229', 'UZ', 'Uzbekistan', '998', '41.377491', '64.585262'],
            ['230', 'VU', 'Vanuatu', '678', '-15.376706', '166.959158'],
            ['231', 'VE', 'Venezuela', '58', '6.42375', '-66.58973'],
            ['232', 'VN', 'Vietnam', '84', '14.058324', '108.277199'],
            ['233', 'VG', 'Virgin Islands, British', '1284', '18.420695', '-64.639968'],
            ['234', 'VI', 'Virgin Islands, U.s.', '1340', '18.335765', '-64.896335'],
            ['235', 'WF', 'Wallis and Futuna', '681', '-13.768752', '-177.156097'],
            ['236', 'EH', 'Western Sahara', '212', '24.215527', '-12.885834'],
            ['237', 'YE', 'Yemen', '967', '15.552727', '48.516388'],
            ['238', 'ZM', 'Zambia', '260', '-13.133897', '27.849332'],
            ['239', 'ZW', 'Zimbabwe', '263', '-19.015438', '29.154857'],
            ['240', 'GG', 'Guernsey', '44', '49.465691', '-2.585278'],
            ['241', 'JE', 'Jersey', '44', '49.214439', '-2.13125'],
            ['242', 'CD', 'Democratic Republic of the Congo', '243', '-4.038333', '21.758664'],
            ['243', 'GZ', 'Gaza Strip', '970', '31.354676', '34.308825'],
            ['244', 'IM', 'Isle of Man', '44', '54.236107', '-4.548056'],
            ['245', 'ME', 'Montenegro', '382', '42.708678', '19.37439'],
            ['246', 'XK', 'Kosovo', '383', '42.602636', '20.902977'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('country');
        $this->dropTable('country');
    }
    
}
