/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var centros_salud = [{
        title: "C.A.P.S. Nº4 LA PICADA",
        marker: [-27.369506, -55.911244]
    },
    {
        title: "C.A.P.S. Nº5 YACYRETÁ",
        marker: [-27.374637, -55.926109]
    },
    {
        title: "C.A.P.S. Nº6 VILLA BLOSSETT",
        marker: [-27.366955728903235, -55.88624954223633]
    },
    {
        title: "C.A.P.S. Nº8 ROCAMORA",
        marker: [-27.376024, -55.913788]
    },
    {
        title: "C.A.P.S. Nº10 GARUPÁ",
        marker: [-27.4808033, -55.83043700000002]
    },
    {
        title: "C.A.P.S. Nº12 VILLA FLOR",
        marker: [-27.3970133, -55.8995104]
    },
    {
        title: "C.A.P.S. N°20 ÑU PORA",
        marker: [-27.447626, -55.860783]
    },
    {
        title: "C.A.P.S. Nº23",
        marker: [-27.4374411, -55.9395844]
    },
    {
        title: "C.A.P.S. Nº25",
        marker: [-27.4285967, -55.93393370000001]
    },
    {
        title: "C.A.P.S. Nº32",
        marker: [-27.4141651, -55.95611450000001]
    },
    {
        title: "C.A.P.S. Nº33",
        marker: [-27.4374411, -55.937942899999996]
    },
    {
        title: "C.A.P.S. SAN BENITO",
        marker: [-27.3925378, -55.9467477]
    },
    {
        title: "HOSPITAL FAVALORO",
        marker: [-27.36510141097646, -55.94911604877123]
    },
    {
        title: "CONSULTORIOS EXTERNOS",
        marker: [-27.384590699999993, -55.8896613]
    },
    {
        title: "HOSPITAL DE FATIMA",
        marker: [-27.436414699999975, -55.869608400000004]
    },
    {
        title: "HOSPITAL SAN VICENTE ",
        marker: [-26.98835200000001, -54.4769311]
    },
    {
        title: "HOSPITAL DE EL SOBERBIO",
        marker: [-27.302512000000004, -54.20000270000003]
    },
    {
        title: "C.A.P.S. KM 18",
        marker: [-27.266074255512944, -54.28327560424805]
    },
    {
        title: "C.A.P.S. ALDEA FRACRAN KM.1300",
        marker: [-26.7471337, -54.2826747]
    },
    {
        title: "C.A.P.S. YERBAL VIEJO",
        marker: [-27.488321900000013, -55.10118840000001]
    },
    {
        title: "C.A.P.S. Nº 9 SISTEN VICK",
        marker: [-27.47754039999999, -55.139954399999965]
    },
    {
        title: "HOSPITAL SAMIC",
        marker: [-27.492244699999997, -55.144318399999975]
    },
    {
        title: "HOSPITAL CAMPO VIERA",
        marker: [-27.3328467, -55.05144]
    },
    {
        title: "C.A.P.S. GUARANÍ",
        marker: [-27.525259999999964, -55.16019]
    },
    {
        title: "C.A.P.S. SAN MARTIN",
        marker: [-27.465613000000005, -55.27618110000003]
    }
];





var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        osm = L.tileLayer(osmUrl, {
            maxZoom: 18,
            attribution: osmAttrib
        });

var map = L.map('map').setView([-27.330953, -55.054313], 9).addLayer(osm);

map.scrollWheelZoom.disable();

map.on('click', function () {
    if (map.scrollWheelZoom.enabled()) {
        map.scrollWheelZoom.disable();
    }
    else {
        map.scrollWheelZoom.enable();
    }
});


centros_salud.forEach(function (element) {
    L.marker(element.marker).addTo(map).bindTooltip(element.title).openTooltip();
});