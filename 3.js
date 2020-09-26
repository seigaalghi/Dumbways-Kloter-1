var b = '';

function bintang(x) {
	var output = document.getElementById("textarea");
	for (i=0; i<=x; i++){

		if (i==0 && x==5) {
			b = '';
			b += '\n';
		}
		else if (i==1 && x==5) {
			b += '    *'+'\n';
		}
		else if (i==2 && x==5) {
			b += '   * *'+'\n';
		}
		else if (i==3 && x==5) {
			b += '  *   *'+'\n';
		}
		else if (i==4 && x==5) {
			b += '   * *'+'\n';
		}
		else if (i==5 && x==5) {
			b += '    *'+'\n';
		}



		else if (i==0 && x==6) {
		b = '';
		b += '\n';
		}
		else if (i==1 && x==6) {
			b += '    **'+'\n';
		}
		else if (i==2 && x==6) {
			b += '   *  *'+'\n';
		} 
		else if (i==3 && x==6) {
			b += '  *    *'+'\n';
		}
		else if (i==4 && x==6) {
			b += '  *    *'+'\n';
		}
		else if (i==5 && x==6) {
			b += '   *  *'+'\n';
		}
		else if (i==6 && x==6) {
			b += '    **'+'\n';
		}



		else if (i==0 && x==9) {
			b = '';
			b += '\n'
		}
		else if (i==1 && x==9) {
			b += '    *'+'\n';
		}
		else if (i==2 && x==9) {
			b += '   * *'+'\n';
		} 
		else if (i==3 && x==9) {
			b += '  *   *'+'\n';
		}
		else if (i==4 && x==9) {
			b += ' *     *'+'\n';
		}
		else if (i==5 && x==9) {
			b += '*       *'+'\n';
		}
		else if (i==6 && x==9) {
			b += ' *     *'+'\n';
		}
		else if (i==7 && x==9) {
			b += '  *   *'+'\n';
		}
		else if (i==8 && x==9) {
			b += '   * *'+'\n';
		}
		else if (i==9 && x==9) {
			b += '    *'+'\n';
		}

	}

console.log('Bintangnya ada '+x+'\n'+b);
output.value += 'Bintangnya ada '+x+'\n'+b;
}