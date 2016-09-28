<script type="text/javascript">
	

var keywords=[
	[1,  "leisure"], 
	[1, "Association"],
	[1, "Education"],
	[1, "Culture"],
	[1, "Politics"],
	[1, "Everyday life"],
	[1, "Family"],
	[1, "Religion"],
	[1, "Personal"],

	[1, "Partisan"],
	[1, "Clandestine"],
	[1, "Communism"],
	[1, "Fascism"],
	[1, "Nazism"],
	[1, "Ethnic cleansing"],

	[1, "D'Annunzio"],
	[1, "World War I"],
	[1, "World War II"],

	[1, "Yugoslav"],
	[1, "Istrian"],
	[1, "Italian"],
	[1, "Croatian"],
	[1, "Serbian"],
	[1, "Slovenian"],
	[1, "Jewish"],
	[1, "Hungarian"],
	[1, "Macedonian"],
	[1, "Austrian"],
	[1, "German"],
	[1, "Roma"],
	[1, "Slovak"],
	[1, "Minority"],

	[1, "Sušak"],
	[1, "Stari grad/Città vecchia"],
	[1, "Zamet"],
	[1, "Kantrida"],
	[1, "Trsat"],
	[1, "Kastav"],
	[1, "Kastav"],
	[1, "Volosko"]


]

</script>



<script type="text/javascript">



var cbx=new Element('input', {type:'checkbox', checked:true});
var label=new Element('label',{
html:'This is an ongoing event ',
styles:{
  color:"cornflowerblue",
  'margin-top': '20px',
  'text-align': 'right'
}
});
label.appendChild(cbx);


var endDateObject=moduleGroup[moduleIndex-1].TextFieldModule;
if(endDateObject&&endDateObject instanceof TextFieldModule){

	endDateObject.addEvent('change',function(){
		var v=endDateObject.getValue();
		if(v){
			if(cbx.checked){
				cbx.checked=false;
			}
		}else{
			cbx.checked=true;
		}
	});

	cbx.addEvent('click', function(){
		if(cbx.checked){
			endDateObject.setValue("");
		}
	});

}else{
	alert('CustomScript:'+moduleIndex+' Expected to find TextFieldModule (endDate) for custom script at index - 1');
}


return label;



</script>

<script type="text/javascript">
	

var style=[
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "hue": "#e9ebed"
            },
            {
                "saturation": -78
            },
            {
                "lightness": 67
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "hue": "#ffffff"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 100
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "hue": "#bbc0c4"
            },
            {
                "saturation": -93
            },
            {
                "lightness": 31
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "hue": "#ffffff"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 100
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "hue": "#e9ebed"
            },
            {
                "saturation": -90
            },
            {
                "lightness": -8
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "hue": "#e9ebed"
            },
            {
                "saturation": 10
            },
            {
                "lightness": 69
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "hue": "#2c2e33"
            },
            {
                "saturation": 7
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "hue": "#bbc0c4"
            },
            {
                "saturation": -93
            },
            {
                "lightness": 31
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "hue": "#bbc0c4"
            },
            {
                "saturation": -93
            },
            {
                "lightness": -2
            }
        ]
    }
];

   map.getBaseMap().setOptions({styles: style});

	
</script>