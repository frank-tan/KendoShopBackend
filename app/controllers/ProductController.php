<?php

class ProductController extends BaseController {
	
	public function allProducts()
	{
		return 
			'{
			    "products": [
			        {
			            "name": "IpponMen",
			            "description": "Highquality hand made men",
			            "category": "Bogu",
			            "price": 300
			        },
			        {
			            "name": "IpponCote",
			            "description": "High quality hand made cote",
			            "category": "Bogu",
			            "price": 150
			        },
			        {
			            "name": "IpponDo",
			            "description": "High quality hand made do",
			            "category": "Bogu",
			            "price": 200
			        },
			        {
			            "name": "IpponTare",
			            "description": "High quality hand made tare",
			            "category": "Bogu",
			            "price": 200
			        },
			        {
			            "name": "BatoBoken",
			            "description": "A premium bukuto for kata training",
			            "category": "Bukuto",
			            "price": 90
			        },
			        {
			            "name": "RyutoBoken",
			            "description": "Our top quality bukuto",
			            "category": "Bukuto",
			            "price": 120
			        },
			        {
			            "name": "MushinShinai",
			            "description": "A basic shinai for everyday training",
			            "category": "Shinai",
			            "price": 30
			        },
			        {
			            "name": "BudonshinShinai",
			            "description": "A premium shinai made of high quality bamboo",
			            "category": "Shinai",
			            "price": 40
			        },
			        {
			            "name": "ZanshinShinai",
			            "description": "Ourtopqualityshinai, recommended for professional players and shiais",
			            "category": "Shinai",
			            "price": 50
			        },
			        {
			            "name": "KurantoIaito",
			            "description": "A premium iaito",
			            "category": "Iaito",
			            "price": 900
			        },
			        {
			            "name": "SeichutoIaito",
			            "description": "A rare replica of a historical katana",
			            "category": "Iaito",
			            "price": 1200
			        },
			        {
			            "name": "GyakutoIaito",
			            "description": "Our top quality iaito",
			            "category": "Iaito",
			            "price": 2000
			        }
			    ]
			}';
	}
}