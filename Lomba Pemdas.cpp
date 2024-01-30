#include <iostream>
#include <iomanip>
#include <conio.h>
using namespace std;
int main()
{
	shop_menu:
	bool is_member=false;
	int jenis_pembeli;
	awal:
	system("cls");
	cout<<"Pembeli"<<endl;
	cout<<"1. Member"<<endl;
	cout<<"2. Non-Member"<<endl;
	cout<<"Masukkan Jenis Pembeli : ";
	cin>>jenis_pembeli;
	switch(jenis_pembeli) {
		case 1 : {
			is_member=true;
			break;
		}
		case 2 : {
			is_member=false;
			break;
		}
		default : {
			goto shop_menu;
		}
	}
	bool diskon_baju=false, diskon_celana=false, diskon_kaos_kaki=false, diskon_sepatu=false;
	float diskon = 0;
    float harga_baju_nodiskon, jumlah_baju;
    float harga_celana_nodiskon, jumlah_celana;
    float harga_kaos_kaki_nodiskon, jumlah_kaos_kaki;
    float harga_sepatu_nodiskon, jumlah_sepatu;
    float harga_topi_nodiskon, jumlah_topi;
    float subtotal, subtotal_diskon,jumlah;
    float diskon_member, total_jumlah;
	cout<<endl;
   	cout<<"Harga : "<<endl;
   	cout<<"==========================="<<endl;
	cout<<"|Celana     : Rp. 100.000 |"<<endl;
	cout<<"|Baju       : Rp. 50.000  |"<<endl;
	cout<<"|Kaos Kaki  : Rp. 15.000  |"<<endl;
	cout<<"|Sepatu     : Rp. 200.000 |"<<endl;
	cout<<"|Topi       : Rp. 20.000  |"<<endl;
	cout<<"==========================="<<endl;
	cout<<endl;
   cout<<"Baju       : ";
   cin>>jumlah_baju;
   cout<<"Celana     : ";
   cin>> jumlah_celana;
   cout<<"Kaos Kaki  : ";
   cin>>jumlah_kaos_kaki;
   cout<<"Sepatu     : ";
   cin>>jumlah_sepatu;
   cout<<"topi       : ";
   cin >> jumlah_topi;
   cout<<"============================"<<endl;
   cout<<endl;
    harga_baju_nodiskon = 50000 * jumlah_baju;
    harga_celana_nodiskon = 100000 * jumlah_celana;
    harga_kaos_kaki_nodiskon = 15000 * jumlah_kaos_kaki;
    harga_sepatu_nodiskon = 200000 * jumlah_sepatu;
    harga_topi_nodiskon =20000 * jumlah_topi;

	
	
   if (jumlah_baju >= 5) {
       diskon += 50000 * jumlah_baju * 0.15;
   }
   if (jumlah_celana >= 4) {
       diskon += 100000 * jumlah_celana * 0.1;
   }
   if (jumlah_kaos_kaki >= 7) {
       diskon += 15000 * jumlah_kaos_kaki * 0.25;
   }
   if (jumlah_sepatu >= 3) {
       diskon += 200000 * jumlah_sepatu * 0.2;
   }
   //baju
    cout<<"--------------------------------------"<<endl;
    cout<<fixed;
   if (jumlah_baju>0) {
   	cout<<"Baju "<<setprecision(0)<<jumlah_baju<<"*50.000       = "<<"Rp. "<<setprecision(0)<<harga_baju_nodiskon<<endl;
   }
   //celana
   if (jumlah_celana>0) {
   	cout<<"Celana "<<jumlah_celana<<"*100.000    = "<<"Rp. "<<setprecision(0)<<harga_celana_nodiskon<<endl;
   }
   //kaos kaki
   if (jumlah_kaos_kaki>0) {
   	cout<<"Kaos Kaki "<<jumlah_kaos_kaki<<"*15.000  = "<<"Rp. "<<setprecision(0)<<harga_kaos_kaki_nodiskon<<endl;
   }
   //sepatu
   if (jumlah_sepatu>0) {
   	cout<<"Sepatu "<<jumlah_sepatu<<"*200.000    = "<<"Rp. "<<setprecision(0)<<harga_sepatu_nodiskon<<endl;
   }
   //topi
   if (jumlah_topi>0) {
   	cout<<"Topi "<<jumlah_topi<<"*20.000       = "<<"Rp. "<<setprecision(0)<<harga_topi_nodiskon<<endl;
   }
   subtotal=harga_topi_nodiskon + harga_sepatu_nodiskon + harga_kaos_kaki_nodiskon + harga_celana_nodiskon + harga_baju_nodiskon;
   if (subtotal >= 1000000) {
   diskon += subtotal * 0.25;
   } 
   else if (subtotal >= 500000) {
   diskon += subtotal * 0.2;
   }
   cout<<fixed;
   cout<<"--------------------------------------"<<endl;
   cout<<"Subtotal            = Rp. "<<setprecision(0)<<subtotal<<endl;
   cout<<"Discount            = Rp. "<<setprecision(0)<<diskon<<endl;
   jumlah = subtotal - diskon;
   if (is_member==true) {
   	diskon_member = jumlah * 0.1;
   }
   float bayar, kembalian;
   total_jumlah = jumlah - diskon_member;
   cout<<"Discount Member     = Rp. "<<diskon_member<<endl;
   cout<<"Total               = Rp. "<<total_jumlah<<endl;
   cout<<"======================================="<<endl;
   cout<<"Masukkan Jumlah Bayar : "<<endl<<"Rp. ";
   cin>>bayar;
   cout<<"Total               Rp. "<<endl<<total_jumlah<<endl;
   cout<<"-----------------------------------------"<<endl;
   kembalian =   bayar - total_jumlah;
   if (bayar<total_jumlah) {
   	cout<<"Maaf Uang Anda Tidak Cukup"<<endl;
   }
   else {
   	cout<<"kembalian : Rp. "<<kembalian<<endl;
   }
   cout<<"-----------------------------------------"<<endl;
   cout<<endl;
   string ulang;
   cout<<"Apakah Anda Ingin Mengulangi Pembelian Lagi (Y/N) : ";
   cin>>ulang;
   
   if(ulang=="y"||ulang=="Y"){
   	goto awal;
   }
   else{
   	cout<<"Terima Kasih Telah Berkunjung";
   }
   return 0;

}
