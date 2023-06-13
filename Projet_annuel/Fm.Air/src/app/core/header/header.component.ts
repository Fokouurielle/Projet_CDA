import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {
  navLinks: any[];

  constructor() {
     
      // element de mon header
    this.navLinks = [
      {
        label: 'Acheter un billet',
        link: '/billet',
        index: 0
      }, {
        label: 'Enregistrement',
        link: '/enregistrement',
        index: 1
      }, {
        label: 'Réservation',
        link: '/reservation',
        index: 2
      }, {
        label: 'Aide',
        link: '/aide',
        index: 3
      },  {
        label: 'Se connecter',
        link: '/connexion',
        index: 3
      },  {
        label: 'S"inscrire',
        link: '/inscription',
        index: 3
      }
    ];

  }

  ngOnInit() {
  }

}
