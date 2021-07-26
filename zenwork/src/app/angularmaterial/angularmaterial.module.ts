import { NgModule } from '@angular/core';
import { MatInputModule } from '@angular/material/input';
import { MatCommonModule } from '@angular/material/core';
import {MatFormFieldModule} from '@angular/material/form-field';
import {MatIconModule} from '@angular/material/icon';
import {MatButtonModule} from '@angular/material/button';
import {MatSnackBarModule} from '@angular/material/snack-bar';
import {MatDialogModule} from '@angular/material/dialog';
import {MatToolbarModule} from '@angular/material/toolbar';
import {MatCardModule} from '@angular/material/card';
import {MatBadgeModule} from '@angular/material/badge';
import {MatMenuModule} from '@angular/material/menu';


const MaterialModules=[
  MatInputModule,
  MatCommonModule,
  MatFormFieldModule,
  MatIconModule,
  MatButtonModule,
  MatSnackBarModule,
  MatDialogModule,
  MatToolbarModule,
  MatCardModule,
  MatBadgeModule,
  MatMenuModule
]


@NgModule({
  imports: [MaterialModules],
  exports:[MaterialModules]
})
export class AngularmaterialModule { }
