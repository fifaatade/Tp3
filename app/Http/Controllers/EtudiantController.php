<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /*const TABLE=[
        1=> [
            'id'=>'1',
            'photo'=>'img1.jpg',
            'nom'=>'FIFA',
            'prenom'=>'Jennifer',
            'hobbies'=>'danse, cinéma, photo,codage',
            'specialite'=>'développement web et mobile',
            'datenais'=>'10/01/1998',
            'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
            ',
        ],
        2=> [
            'id'=>'2',
            'photo'=>'img2.jpg',
            'nom'=>'ADOTEVI',
            'prenom'=>'Canelle',
            'hobbies'=>'danse, photo,codage',
            'specialite'=>'développement web et mobile',
            'datenais'=>'10/01/1998',
            'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
            ',
        ],
        [
            'id'=>'3',
            'photo'=>'img3.jpg',
            'nom'=>'MARIUS',
            'prenom'=>'marius',
            'hobbies'=>'danse, cinéma,codage',
            'specialite'=>'développement web et mobile',
            'datenais'=>'10/01/1998',
            'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
            ',
        ],
        [
            'id'=>'4',
            'photo'=>'img4.jpg',
            'nom'=>'ARSENE',
            'prenom'=>'arsène',
            'hobbies'=>'danse,codage',
            'specialite'=>'développement web et mobile',
            'datenais'=>'10/01/1998',
            'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
            ',

        ],
        [
            'id'=>'5',
            'photo'=>'img5.jpg',
            'nom'=>'TITUS',
            'prenom'=>'titus',
            'hobbies'=>'danse, cinéma, photo,codage',
            'specialite'=>'développement web et mobile',
            'datenais'=>'10/01/1998',
            'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
            ',
        ],
        [
            'id'=>'6',
            'photo'=>'img6.jpg',
            'nom'=>'MAUREL',
            'prenom'=>'maurel',
            'hobbies'=>' cinéma, photo,codage',
            'specialite'=>'développement web et mobile',
            'datenais'=>'10/01/1998',
            'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
            ',
        ],
        [
            'id'=>'7',
            'photo'=>'img7.jpg',
            'nom'=>'ROLANDE',
            'prenom'=>'rolande',
            'hobbies'=>'danse, cinéma, photo,codage',
            'specialite'=>'développement web et mobile',
            'datenais'=>'10/01/1998',
            'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
            ',
        ],
        [
            'id'=>'8',
            'photo'=>'img8.jpg',
            'nom'=>'PRISCA',
            'prenom'=>'prisca',
            'hobbies'=>'photo',
            'specialite'=>'développement web et mobile',
            'datenais'=>'10/01/1998',
            'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
            ',
        ],
        [
            'id'=>'9',
            'photo'=>'img9.png',
            'nom'=>'PHAREL',
            'prenom'=>'pharel',
            'hobbies'=>'danse, cinéma, photo,codage',
            'specialite'=>'développement web et mobile',
            'datenais'=>'10/01/1998',
            'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
            ',
        ],
        [
            'id'=>'10',
            'photo'=>'img10.jpeg',
            'nom'=>'DIEUDONNE',
            'prenom'=>'dieudonne',
            'hobbies'=>'danse, photo,codage',
            'specialite'=>'développement web et mobile',
            'datenais'=>'10/01/1998',
            'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
            ',
        ],
        [
            'id'=>'11',
            'photo'=>'img11.jpeg',
            'nom'=>'ETHEOCLE',
            'prenom'=>'etheocle',
            'hobbies'=>' cinéma, photo,codage',
            'specialite'=>'développement web et mobile',
            'datenais'=>'10/01/1998',
            'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
            ',
        ],
        [
            'id'=>'12',
            'photo'=>'img12.jpeg',
            'nom'=>'OLIVIER',
            'prenom'=>'olivier',
            'hobbies'=>'danse, cinéma, photo,codage',
            'specialite'=>'développement web et mobile',
            'datenais'=>'10/01/1998',
            'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
            ',
        ],
        [
            'id'=>'13',
            'photo'=>'img13.jpeg',
            'nom'=>'AVENT',
            'prenom'=>'avent',
            'hobbies'=>'danse, cinéma',
            'specialite'=>'développement web et mobile',
            'datenais'=>'10/01/1998',
            'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
            ',
        ],
        [
            'id'=>'14',
            'photo'=>'img14.jpeg',
            'nom'=>'YAKID',
            'prenom'=>'yakid',
            'hobbies'=>'danse, cinéma, photo,codage',
            'specialite'=>'développement web et mobile',
            'datenais'=>'10/01/1998',
            'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
            ',
        ],
        [
            'id'=>'15',
            'photo'=>'img15.jpeg',
            'nom'=>'BOUHARI',
            'prenom'=>'bouhari',
            'hobbies'=>'danse, cinéma, photo,codage',
            'specialite'=>'développement web et mobile',
            'datenais'=>'10/01/1998',
            'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
            ',
        ]
    ];
    foreach(TABLE as $key=>$item)
    pu
    */

    public $etudiants;
    public function index(){
        $etudiants=[
            [
                'id'=>'1',
                'photo'=>'img1.jpg',
                'nom'=>'FIFA',
                'prenom'=>'Jennifer',
                'hobbies'=>'danse, cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
            ],
            [
                'id'=>'2',
                'photo'=>'img2.jpg',
                'nom'=>'ADOTEVI',
                'prenom'=>'Canelle',
                'hobbies'=>'danse, photo,codage',
                'specialite'=>'développement web et mobile',
            ],
            [
                'id'=>'3',
                'photo'=>'img3.jpg',
                'nom'=>'MARIUS',
                'prenom'=>'marius',
                'hobbies'=>'danse, cinéma,codage',
                'specialite'=>'développement web et mobile',
            ],
            [
                'id'=>'4',
                'photo'=>'img4.jpg',
                'nom'=>'ARSENE',
                'prenom'=>'arsène',
                'hobbies'=>'danse,codage',
                'specialite'=>'développement web et mobile',
            ],
            [
                'id'=>'5',
                'photo'=>'img5.jpg',
                'nom'=>'TITUS',
                'prenom'=>'titus',
                'hobbies'=>'danse, cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
            ],
            [
                'id'=>'6',
                'photo'=>'img6.jpg',
                'nom'=>'MAUREL',
                'prenom'=>'maurel',
                'hobbies'=>' cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
            ],
            [
                'id'=>'7',
                'photo'=>'img7.jpg',
                'nom'=>'ROLANDE',
                'prenom'=>'rolande',
                'hobbies'=>'danse, cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
            ],
            [
                'id'=>'8',
                'photo'=>'img8.jpg',
                'nom'=>'PRISCA',
                'prenom'=>'prisca',
                'hobbies'=>'photo',
                'specialite'=>'développement web et mobile',
            ],
            [
                'id'=>'9',
                'photo'=>'img9.png',
                'nom'=>'PHAREL',
                'prenom'=>'pharel',
                'hobbies'=>'danse, cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
            ],
            [
                'id'=>'10',
                'photo'=>'img10.jpeg',
                'nom'=>'DIEUDONNE',
                'prenom'=>'dieudonne',
                'hobbies'=>'danse, photo,codage',
                'specialite'=>'développement web et mobile',
            ],
            [
                'id'=>'11',
                'photo'=>'img11.jpeg',
                'nom'=>'ETHEOCLE',
                'prenom'=>'etheocle',
                'hobbies'=>' cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
            ],
            [
                'id'=>'12',
                'photo'=>'img12.jpeg',
                'nom'=>'OLIVIER',
                'prenom'=>'olivier',
                'hobbies'=>'danse, cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
            ],
            [
                'id'=>'13',
                'photo'=>'img13.jpeg',
                'nom'=>'AVENT',
                'prenom'=>'avent',
                'hobbies'=>'danse, cinéma',
                'specialite'=>'développement web et mobile',
            ],
            [
                'id'=>'14',
                'photo'=>'img14.jpeg',
                'nom'=>'YAKID',
                'prenom'=>'yakid',
                'hobbies'=>'danse, cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
            ],
            [
                'id'=>'15',
                'photo'=>'img15.jpeg',
                'nom'=>'BOUHARI',
                'prenom'=>'bouhari',
                'hobbies'=>'danse, cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
            ]
        ];
        return view('Etudiants.list', compact('etudiants'));
    }
    public $etudiant;
    public function show( $id){
        //$idetudiant=collect($this->etudiants)->firstWhere('id',$id);
        
        $etudiant = [
            [
                'id'=>'1',
                'photo'=>'img1.jpg',
                'nom'=>'FIFA',
                'prenom'=>'Jennifer',
                'hobbies'=>'danse, cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
                'datenais'=>'10/01/1998',
                'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
                ',
            ],
            [
                'id'=>'2',
                'photo'=>'img2.jpg',
                'nom'=>'ADOTEVI',
                'prenom'=>'Canelle',
                'hobbies'=>'danse, photo,codage',
                'specialite'=>'développement web et mobile',
                'datenais'=>'10/01/1998',
                'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
                ',
            ],
            [
                'id'=>'3',
                'photo'=>'img3.jpg',
                'nom'=>'MARIUS',
                'prenom'=>'marius',
                'hobbies'=>'danse, cinéma,codage',
                'specialite'=>'développement web et mobile',
                'datenais'=>'10/01/1998',
                'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
                ',
            ],
            [
                'id'=>'4',
                'photo'=>'img4.jpg',
                'nom'=>'ARSENE',
                'prenom'=>'arsène',
                'hobbies'=>'danse,codage',
                'specialite'=>'développement web et mobile',
                'datenais'=>'10/01/1998',
                'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
                ',

            ],
            [
                'id'=>'5',
                'photo'=>'img5.jpg',
                'nom'=>'TITUS',
                'prenom'=>'titus',
                'hobbies'=>'danse, cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
                'datenais'=>'10/01/1998',
                'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
                ',
            ],
            [
                'id'=>'6',
                'photo'=>'img6.jpg',
                'nom'=>'MAUREL',
                'prenom'=>'maurel',
                'hobbies'=>' cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
                'datenais'=>'10/01/1998',
                'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
                ',
            ],
            [
                'id'=>'7',
                'photo'=>'img7.jpg',
                'nom'=>'ROLANDE',
                'prenom'=>'rolande',
                'hobbies'=>'danse, cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
                'datenais'=>'10/01/1998',
                'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
                ',
            ],
            [
                'id'=>'8',
                'photo'=>'img8.jpg',
                'nom'=>'PRISCA',
                'prenom'=>'prisca',
                'hobbies'=>'photo',
                'specialite'=>'développement web et mobile',
                'datenais'=>'10/01/1998',
                'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
                ',
            ],
            [
                'id'=>'9',
                'photo'=>'img9.png',
                'nom'=>'PHAREL',
                'prenom'=>'pharel',
                'hobbies'=>'danse, cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
                'datenais'=>'10/01/1998',
                'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
                ',
            ],
            [
                'id'=>'10',
                'photo'=>'img10.jpeg',
                'nom'=>'DIEUDONNE',
                'prenom'=>'dieudonne',
                'hobbies'=>'danse, photo,codage',
                'specialite'=>'développement web et mobile',
                'datenais'=>'10/01/1998',
                'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
                ',
            ],
            [
                'id'=>'11',
                'photo'=>'img11.jpeg',
                'nom'=>'ETHEOCLE',
                'prenom'=>'etheocle',
                'hobbies'=>' cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
                'datenais'=>'10/01/1998',
                'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
                ',
            ],
            [
                'id'=>'12',
                'photo'=>'img12.jpeg',
                'nom'=>'OLIVIER',
                'prenom'=>'olivier',
                'hobbies'=>'danse, cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
                'datenais'=>'10/01/1998',
                'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
                ',
            ],
            [
                'id'=>'13',
                'photo'=>'img13.jpeg',
                'nom'=>'AVENT',
                'prenom'=>'avent',
                'hobbies'=>'danse, cinéma',
                'specialite'=>'développement web et mobile',
                'datenais'=>'10/01/1998',
                'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
                ',
            ],
            [
                'id'=>'14',
                'photo'=>'img14.jpeg',
                'nom'=>'YAKID',
                'prenom'=>'yakid',
                'hobbies'=>'danse, cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
                'datenais'=>'10/01/1998',
                'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
                ',
            ],
            [
                'id'=>'15',
                'photo'=>'img15.jpeg',
                'nom'=>'BOUHARI',
                'prenom'=>'bouhari',
                'hobbies'=>'danse, cinéma, photo,codage',
                'specialite'=>'développement web et mobile',
                'datenais'=>'10/01/1998',
                'bio'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora nostrum distinctio asperiores necessitatibus perspiciatis, optio eos facilis veritatis molestias sunt, accusantium est fuga, ea earum unde expedita illo soluta?
                ',
            ]
        ];
        $etudiantItem=[];
        foreach($etudiant as $item){
            if($item['id']==$id){
                $etudiantItem=$item;
                //break;
            }
        }
        return view('Etudiants.seeMore',compact('etudiantItem'));
    }
/*     
    public function addstudent(Request $request){
        dd($request->all());
    } */
}
