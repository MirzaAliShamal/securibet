console.log("Calculator script loaded");

document.addEventListener('DOMContentLoaded', function() {
    const capitalRange = document.getElementById('capital-range');
    const capitalDisplay = document.getElementById('capital-display');
    const monthlyRevenue = document.getElementById('monthly-revenue');
    const annualRevenue = document.getElementById('annual-revenue');
    const strategyInputs = document.querySelectorAll('input[name="strategy"]');
    const dynamicMonthlyRevenue = document.getElementById('dynamic-monthly-revenue');

    // Les données de gains potentiels étendues jusqu'à 5000 €
    const gainsData = {
        "Standard": {
            300: { monthly: 183, annual: 2189 },
            350: { monthly: 213, annual: 2554 },
            400: { monthly: 244, annual: 2919 },
            450: { monthly: 274, annual: 3284 },
            500: { monthly: 305, annual: 3648 },
            550: { monthly: 335, annual: 4013 },
            600: { monthly: 365, annual: 4378 },
            650: { monthly: 396, annual: 4743 },
            700: { monthly: 426, annual: 5108 },
            750: { monthly: 457, annual: 5472 },
            800: { monthly: 487, annual: 5837 },
            850: { monthly: 517, annual: 6202 },
            900: { monthly: 548, annual: 6567 },
            950: { monthly: 578, annual: 6932 },
            1000: { monthly: 609, annual: 7296 },
            1050: { monthly: 639, annual: 7661 },
            1100: { monthly: 669, annual: 8026 },
            1150: { monthly: 700, annual: 8391 },
            1200: { monthly: 730, annual: 8756 },
            1250: { monthly: 760, annual: 9120 },
            1300: { monthly: 791, annual: 9485 },
            1350: { monthly: 821, annual: 9850 },
            1400: { monthly: 852, annual: 10215 },
            1450: { monthly: 882, annual: 10580 },
            1500: { monthly: 913, annual: 10944 },
            1550: { monthly: 943, annual: 11309 },
            1600: { monthly: 973, annual: 11674 },
            1650: { monthly: 1004, annual: 12039 },
            1700: { monthly: 1034, annual: 12404 },
            1750: { monthly: 1065, annual: 12768 },
            1800: { monthly: 1095, annual: 13133 },
            1850: { monthly: 1125, annual: 13498 },
            1900: { monthly: 1156, annual: 13863 },
            1950: { monthly: 1186, annual: 14228 },
            2000: { monthly: 1217, annual: 14592 },
            2500: { monthly: 1521, annual: 18252 },
            3000: { monthly: 1825, annual: 21912 },
            3500: { monthly: 2130, annual: 25572 },
            4000: { monthly: 2434, annual: 29232 },
            4500: { monthly: 2738, annual: 32892 },
            5000: { monthly: 3042, annual: 36552 }
        },
        "Aggressive": {
            300: { monthly: 343, annual: 4104 },
            350: { monthly: 400, annual: 4788 },
            400: { monthly: 457, annual: 5472 },
            450: { monthly: 514, annual: 6156 },
            500: { monthly: 571, annual: 6840 },
            550: { monthly: 628, annual: 7524 },
            600: { monthly: 685, annual: 8208 },
            650: { monthly: 742, annual: 8892 },
            700: { monthly: 799, annual: 9576 },
            750: { monthly: 856, annual: 10260 },
            800: { monthly: 913, annual: 10944 },
            850: { monthly: 970, annual: 11628 },
            900: { monthly: 1027, annual: 12312 },
            950: { monthly: 1084, annual: 12996 },
            1000: { monthly: 1141, annual: 13680 },
            1050: { monthly: 1198, annual: 14364 },
            1100: { monthly: 1255, annual: 15048 },
            1150: { monthly: 1312, annual: 15732 },
            1200: { monthly: 1369, annual: 16416 },
            1250: { monthly: 1426, annual: 17100 },
            1300: { monthly: 1483, annual: 17784 },
            1350: { monthly: 1540, annual: 18468 },
            1400: { monthly: 1597, annual: 19152 },
            1450: { monthly: 1654, annual: 19836 },
            1500: { monthly: 1711, annual: 20520 },
            1550: { monthly: 1768, annual: 21204 },
            1600: { monthly: 1825, annual: 21888 },
            1650: { monthly: 1882, annual: 22572 },
            1700: { monthly: 1939, annual: 23256 },
            1750: { monthly: 1996, annual: 23940 },
            1800: { monthly: 2053, annual: 24624 },
            1850: { monthly: 2110, annual: 25308 },
            1900: { monthly: 2167, annual: 25992 },
            1950: { monthly: 2224, annual: 26676 },
            2000: { monthly: 2281, annual: 27360 },
            2500: { monthly: 2851, annual: 34212 },
            3000: { monthly: 3421, annual: 41064 },
            3500: { monthly: 3991, annual: 47916 },
            4000: { monthly: 4561, annual: 54768 },
            4500: { monthly: 5131, annual: 61620 },
            5000: { monthly: 5701, annual: 68472 }
        }
    };

    function updateRevenue() {
        const selectedCapital = parseInt(capitalRange.value);
        const selectedStrategy = document.querySelector('input[name="strategy"]:checked').value;

        const data = gainsData[selectedStrategy][selectedCapital];
        capitalDisplay.textContent = `€ ${selectedCapital}`;
        monthlyRevenue.textContent = `€ ${data.monthly} / mois`;
        annualRevenue.textContent = `€ ${data.annual} / an`;

        // Mise à jour de "Gagnez potentiellement: ... ou plus par mois"
        if (dynamicMonthlyRevenue) {
            dynamicMonthlyRevenue.textContent = `${data.monthly} €`;
        }
    }

    // Écouteurs d'événements
    capitalRange.addEventListener('input', updateRevenue);
    strategyInputs.forEach(input => {
        input.addEventListener('change', updateRevenue);
    });

    // Initialiser l'affichage
    updateRevenue();
});
