import { Component } from '@angular/core';
import { Client } from '../../services/api';

@Component({
  selector: 'minds-miner',
  templateUrl: 'miner.html'
})

export class MindsMiner {

  open: boolean = false;
  mining: boolean = false;

  constructor(private client: Client) { }

  toggle() {
    this.open = !this.open;
  }

  startMining() {
    this.mining = true;
  }

  stopMining() {
    this.mining = false;
  }
}
