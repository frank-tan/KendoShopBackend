<?php

class ProductController extends BaseController {
	
	public function allProducts()
	{
		return 
			'{
			    "products": [
			        {
						"id": 1,
			            "name": "Ippon Men",
			            "description": "Highquality hand made men",
			            "category": "Bogu",
			            "price": 300
			        },
			        {
						"id": 2,
			            "name": "Ippon Cote",
			            "description": "High quality hand made cote",
			            "category": "Bogu",
			            "price": 150
			        },
			        {
						"id": 3,
			            "name": "Ippon Do",
			            "description": "High quality hand made do",
			            "category": "Bogu",
			            "price": 200
			        },
			        {
						"id": 4,
			            "name": "Ippon Tare",
			            "description": "High quality hand made tare",
			            "category": "Bogu",
			            "price": 200
			        },
			        {
						"id": 5,
			            "name": "Bato Boken",
			            "description": "A premium bukuto for kata training",
			            "category": "Bukuto",
			            "price": 90
			        },
			        {
						"id": 6,
			            "name": "Ryuto Boken",
			            "description": "Our top quality bukuto",
			            "category": "Bukuto",
			            "price": 120
			        },
			        {
						"id": 7,
			            "name": "Mushin Shinai",
			            "description": "A basic shinai for everyday training",
			            "category": "Shinai",
			            "price": 30
			        },
			        {
						"id": 8,
			            "name": "Budonshin Shinai",
			            "description": "A premium shinai made of high quality bamboo",
			            "category": "Shinai",
			            "price": 40
			        },
			        {
						"id": 9,
			            "name": "Zanshin Shinai",
			            "description": "Ourtopqualityshinai, recommended for professional players and shiais",
			            "category": "Shinai",
			            "price": 50
			        },
			        {
						"id": 10,
			            "name": "Kuranto Iaito",
			            "description": "A premium iaito",
			            "category": "Iaito",
			            "price": 900
			        },
			        {
						"id": 11,
			            "name": "Seichuto Iaito",
			            "description": "A rare replica of a historical katana",
			            "category": "Iaito",
			            "price": 1200
			        },
			        {
						"id": 12,
			            "name": "Gyakuto Iaito",
			            "description": "Our top quality iaito",
			            "category": "Iaito",
			            "price": 2000
			        }
			    ]
			}';
	}
}