var countries = [
    { text: '+93', value: '+93', id: 'AF' },
    { text: '+355', value: '+355', id: 'AL' },
    { text: '+213', value: '+213', id: 'DZ' },
    { text: '+1-684', value: '1-684', id: 'AS' },
    { text: '+376', value: '+376', id: 'AD' },
    { text: '+244', value: '+244', id: 'AO' },
    { text: '+1-264', value: '+1-264', id: 'AI' },
    { text: '+672', value: '+672', id: 'AQ' },
    { text: '+1-268', value: '+1-268', id: 'AG' },
    { text: '+54', value: '+54', id: 'AR' },
    { text: '+374', value: '+374', id: 'AM' },
    { text: '+297', value: '+297', id: 'AW' },
    { text: '+61', value: '+61', id: 'AU' },
    { text: '+43', value: '+43', id: 'AT' },
    { text: '+994', value: '+994', id: 'AZ' },
    { text: '+1-242', value: '+1-242', id: 'BS' },
    { text: '+973', value: '+973', id: 'BH' },
    { text: '+880', value: '+880', id: 'BD' },
    { text: '+1-246', value: '+1-246', id: 'BB' },
    { text: '+375', value: '+375', id: 'BY' },
    { text: '+32', value: '+32', id: 'BE' },
    { text: '+501', value: '+501', id: 'BZ' },
    { text: '+229', value: '+229', id: 'BJ' },
    { text: '+1-441', value: '+1-441', id: 'BM' },
    { text: '+975', value: '+975', id: 'BT' },
    { text: '+591', value: '+591', id: 'BO' },
    { text: '+387', value: '+387', id: 'BA' },
    { text: '+267', value: '+267', id: 'BW' },
    { text: '+55', value: '+55', id: 'BR' },
    { text: '+673', value: '+673', id: 'BN' },
    { text: '+359', value: '+359', id: 'BG' },
    { text: '+226', value: '+226', id: 'BF' },
    { text: '+257', value: '+257', id: 'BI' },
    { text: '+855', value: '+855', id: 'KH' },
    { text: '+237', value: '+237', id: 'CM' },
    { text: '+1', value: '+1', id: 'CA' },
    { text: '+238', value: '+238', id: 'CV' },
    { text: '+1-345', value: '+1-345', id: 'KY' },
    { text: '+236', value: '+236', id: 'CF' },
    { text: '+235', value: '+235', id: 'TD' },
    { text: '+56', value: '+56', id: 'CL' },
    { text: '+86', value: '+86', id: 'CN' },
    { text: '+57', value: '+57', id: 'CO' },
    { text: '+269', value: '+269', id: 'KM' },
    { text: '+242', value: '+242', id: 'CG' },
    { text: '+243', value: '+243', id: 'CD' },
    { text: '+682', value: '+682', id: 'CK' },
    { text: '+506', value: '+506', id: 'CR' },
    { text: '+225', value: '+225', id: 'CI' },
    { text: '+385', value: '+385', id: 'HR' },
    { text: '+53', value: '+53', id: 'CU' },
    { text: '+357', value: '+357', id: 'CY' },
    { text: '+420', value: '+420', id: 'CZ' },
    { text: '+45', value: '+45', id: 'DK' },
    { text: '+253', value: '+253', id: 'DJ' },
    { text: '+1-767', value: '+1-767', id: 'DM' },
    { text: '+1-809', value: '+1-809', id: 'DO' },
    { text: '+593', value: '+593', id: 'EC' },
    { text: '+20', value: '+20', id: 'EG' },
    { text: '+503', value: '+503', id: 'SV' },
    { text: '+240', value: '+240', id: 'GQ' },
    { text: '+291', value: '+291', id: 'ER' },
    { text: '+372', value: '+372', id: 'EE' },
    { text: '+251', value: '+251', id: 'ET' },
    { text: '+298', value: '+298', id: 'FO' },
    { text: '+679', value: '+679', id: 'FJ' },
    { text: '+358', value: '+358', id: 'FI' },
    { text: '+33', value: '+33', id: 'FR' },
    { text: '+689', value: '+689', id: 'PF' },
    { text: '+241', value: '+241', id: 'GA' },
    { text: '+220', value: '+220', id: 'GM' },
    { text: '+995', value: '+995', id: 'GE' },
    { text: '+49', value: '+49', id: 'DE' },
    { text: '+233', value: '+233', id: 'GH' },
    { text: '+350', value: '+350', id: 'GI' },
    { text: '+30', value: '+30', id: 'GR' },
    { text: '+299', value: '+299', id: 'GL' },
    { text: '+1-473', value: '+1-473', id: 'GD' },
    { text: '+590', value: '+590', id: 'GP' },
    { text: '+1-671', value: '+1-671', id: 'GU' },
    { text: '+502', value: '+502', id: 'GT' },
    { text: '+44-1481', value: '+44-1481', id: 'GG' },
    { text: '+224', value: '+224', id: 'GN' },
    { text: '+245', value: '+245', id: 'GW' },
    { text: '+592', value: '+592', id: 'GY' },
    { text: '+509', value: '+509', id: 'HT' },
    { text: '+504', value: '+504', id: 'HN' },
    { text: '+852', value: '+852', id: 'HK' },
    { text: '+36', value: '+36', id: 'HU' },
    { text: '+354', value: '+354', id: 'IS' },
    { text: '+91', value: '+91', id: 'IN' },
    { text: '+62', value: '+62', id: 'ID' },
    { text: '+98', value: '+98', id: 'IR' },
    { text: '+964', value: '+964', id: 'IQ' },
    { text: '+353', value: '+353', id: 'IE' },
    { text: '+44-1624', value: '+44-1624', id: 'IM' },
    { text: '+39', value: '+39', id: 'IT' },
    { text: '+1-876', value: '+1-876', id: 'JM' },
    { text: '+81', value: '+81', id: 'JP' },
    { text: '+44-1534', value: '+44-1534', id: 'JE' },
    { text: '+962', value: '+962', id: 'JO' },
    { text: '+7', value: '+7', id: 'KZ' },
    { text: '+254', value: '+254', id: 'KE' },
    { text: '+686', value: '+686', id: 'KI' },
    { text: '+965', value: '+965', id: 'KW' },
    { text: '+996', value: '+996', id: 'KG' },
    { text: '+856', value: '+856', id: 'LA' },
    { text: '+371', value: '+371', id: 'LV' },
    { text: '+961', value: '+961', id: 'LB' },
    { text: '+266', value: '+266', id: 'LS' },
    { text: '+231', value: '+231', id: 'LR' },
    { text: '+218', value: '+218', id: 'LY' },
    { text: '+423', value: '+423', id: 'LI' },
    { text: '+370', value: '+370', id: 'LT' },
    { text: '+352', value: '+352', id: 'LU' },
    { text: '+853', value: '+853', id: 'MO' },
    { text: '+389', value: '+389', id: 'MK' },
    { text: '+261', value: '+261', id: 'MG' },
    { text: '+265', value: '+265', id: 'MW' },
    { text: '+60', value: '+60', id: 'MY' },
    { text: '+960', value: '+960', id: 'MV' },
    { text: '+223', value: '+223', id: 'ML' },
    { text: '+356', value: '+356', id: 'MT' },
    { text: '+692', value: '+692', id: 'MH' },
    { text: '+222', value: '+222', id: 'MR' },
    { text: '+230', value: '+230', id: 'MU' },
    { text: '+52', value: '+52', id: 'MX' },
    { text: '+691', value: '+691', id: 'FM' },
    { text: '+373', value: '+373', id: 'MD' },
    { text: '+377', value: '+377', id: 'MC' },
    { text: '+976', value: '+976', id: 'MN' },
    { text: '+1-664', value: '+1-664', id: 'MS' },
    { text: '+212', value: '+212', id: 'MA' },
    { text: '+258', value: '+258', id: 'MZ' },
    { text: '+95', value: '+95', id: 'MM' },
    { text: '+264', value: '+264', id: 'NA' },
    { text: '+674', value: '+674', id: 'NR' },
    { text: '+977', value: '+977', id: 'NP' },
    { text: '+31', value: '+31', id: 'NL' },
    { text: '+599', value: '+599', id: 'AN' },
    { text: '+687', value: '+687', id: 'NC' },
    { text: '+64', value: '+64', id: 'NZ' },
    { text: '+505', value: '+505', id: 'NI' },
    { text: '+227', value: '+227', id: 'NE' },
    { text: '+234', value: '+234', id: 'NG' },
    { text: '+47', value: '+47', id: 'NO' },
    { text: '+968', value: '+968', id: 'OM' },
    { text: '+92', value: '+92', id: 'PK' },
    { text: '+680', value: '+680', id: 'PW' },
    { text: '+970', value: '+970', id: 'PS' },
    { text: '+507', value: '+507', id: 'PA' },
    { text: '+675', value: '+675', id: 'PG' },
    { text: '+595', value: '+595', id: 'PY' },
    { text: '+51', value: '+51', id: 'PE' },
    { text: '+63', value: '+63', id: 'PH' },
    { text: '+48', value: '+48', id: 'PL' },
    { text: '+351', value: '+351', id: 'PT' },
    { text: '+1-787', value: '+1-787', id: 'PR' },
    { text: '+974', value: '+974', id: 'QA' },
    { text: '+262', value: '+262', id: 'RE' },
    { text: '+40', value: '+40', id: 'RO' },
    { text: '+7', value: '+7', id: 'RU' },
    { text: '+250', value: '+250', id: 'RW' },
    { text: '+1-869', value: '+1-869', id: 'KN' },
    { text: '+1-758', value: '+1-758', id: 'LC' },
    { text: '+1-784', value: '+1-784', id: 'VC' },
    { text: '+685', value: '+685', id: 'WS' },
    { text: '+378', value: '+378', id: 'SM' },
    { text: '+239', value: '+239', id: 'ST' },
    { text: '+966', value: '+966', id: 'SA' },
    { text: '+221', value: '+221', id: 'SN' },
    { text: '+248', value: '+248', id: 'SC' },
    { text: '+232', value: '+232', id: 'SL' },
    { text: '+65', value: '+65', id: 'SG' },
    { text: '+421', value: '+421', id: 'SK' },
    { text: '+386', value: '+386', id: 'SI' },
    { text: '+677', value: '+677', id: 'SB' },
    { text: '+252', value: '+252', id: 'SO' },
    { text: '+27', value: '+27', id: 'ZA' },
    { text: '+34', value: '+34', id: 'ES' },
    { text: '+94', value: '+94', id: 'LK' },
    { text: '+249', value: '+249', id: 'SD' },
    { text: '+597', value: '+597', id: 'SR' },
    { text: '+268', value: '+268', id: 'SZ' },
    { text: '+46', value: '+46', id: 'SE' },
    { text: '+41', value: '+41', id: 'CH' },
    { text: '+963', value: '+963', id: 'SY' },
    { text: '+886', value: '+886', id: 'TW' },
    { text: '+992', value: '+992', id: 'TJ' },
    { text: '+255', value: '+255', id: 'TZ' },
    { text: '+66', value: '+66', id: 'TH' },
    { text: '+228', value: '+228', id: 'TG' },
    { text: '+676', value: '+676', id: 'TO' },
    { text: '+1-868', value: '+1-868', id: 'TT' },
    { text: '+216', value: '+216', id: 'TN' },
    { text: '+90', value: '+90', id: 'TR' },
    { text: '+993', value: '+993', id: 'TM' },
    { text: '+1-649', value: '+1-649', id: 'TC' },
    { text: '+688', value: '+688', id: 'TV' },
    { text: '+256', value: '+256', id: 'UG' },
    { text: '+380', value: '+380', id: 'UA' },
    { text: '+971', value: '+971', id: 'AE' },
    { text: '+44', value: '+44', id: 'GB' },
    { text: '+1', value: '+1', id: 'US' },
    { text: '+598', value: '+598', id: 'UY' },
    { text: '+998', value: '+998', id: 'UZ' },
    { text: '+678', value: '+678', id: 'VU' },
    { text: '+58', value: '+58', id: 'VE' },
    { text: '+84', value: '+84', id: 'VN' },
    { text: '+212', value: '+212', id: 'EH' },
    { text: '+967', value: '+967', id: 'YE' },
    { text: '+260', value: '+260', id: 'ZM' },
    { text: '+263', value: '+263', id: 'ZW' }
];

$(document).ready(function () {

    $(".select2-countries").each(function () {

        const $select = $(this);

        // Clear existing options
        $select.empty();

        // Add all countries
        countries.forEach(function (country) {

            const option = $("<option>", {
                value: country.id,
                text: country.text
            });

            option.attr("data-code", country.value);
            option.attr("data-country", country.id);

            $select.append(option);
        });

        // Kuwait default
        $select.val("KW");

        // Initialize Nice Select
        $select.niceSelect();

        // Add flags to Nice Select dropdown
        const $niceSelect = $select.next(".nice-select");

        $niceSelect.find(".list .option").each(function (index) {

            const country = countries[index];

            if (!country) return;

            const flag = `
                <img 
                    src="src/images/flags/${country.id.toLowerCase()}.svg"
                    class="flag"
                    alt=""
                >
            `;

            $(this).prepend(flag);
        });

        // Add flag to selected item
        function updateSelectedFlag() {

            const selectedCountry = countries.find(function (country) {
                return country.id === $select.val();
            });

            if (!selectedCountry) return;

            const selectedHtml = `
                <img 
                    src="src/images/flags/${selectedCountry.id.toLowerCase()}.svg"
                    class="flag"
                    alt=""
                >
                <span>${selectedCountry.text}</span>
            `;

            $niceSelect.find(".current").html(selectedHtml);
        }

        updateSelectedFlag();

        // Update selected flag on change
        $select.on("change", function () {
            updateSelectedFlag();
        });

    });

});