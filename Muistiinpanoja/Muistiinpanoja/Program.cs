using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Muistiinpanoja
{
    class Program
    {
        static void Main(string[] args)
        {
            /* FOREACH -LOOPPI:
             foreach (tyyppi muuttuja in kokoelma)
            {
                suoritettava koodi
            }
            HOX! ei voi käyttää, jos haluaa muokata kokoelman arvoja, silloin käytettävä for-silmukkaa.
            */

            // Taulukon läpikäynti:
            int[] numerot = { 1, 2, 3, 4, 5 };
            foreach (int numero in numerot)
            {
                Console.WriteLine(numero);
            }

            // Listan läpikäynti:
            List<string> nimet = new List<string> { "Maija", "Matti", "Liisa" };
            foreach (string nimi in nimet)
            {
                Console.WriteLine($"Tervetuloa, {nimi} !");
            }

            // Sanan merkkien läpikäynti:
            string sana = "ohjelmointi";
            foreach (char merkki in sana)
            {
                Console.Write(merkki);
            }

            // TAULUKOIDEN JÄRJESTÄMINEN:
            // Järjestetään merkit aakkosjärjestyksessä
            string[] autot = { "Volvo", "BMW", "Ford", "Mazda" };
            Array.Sort(autot);
            foreach (string merkit in autot)
            {
                Console.WriteLine(merkit);
            }

            // Järjestetään numerot nousevaan.
            // Isoin ja pienin arvo, elementtien summa
            int[] myNumbers = { 5, 1, 8, 9 };
            Array.Sort(myNumbers);
            foreach (int i in myNumbers)
            {
                Console.WriteLine(i);
            }
            Console.WriteLine(myNumbers.Max());  // returns the largest value
            Console.WriteLine(myNumbers.Min());  // returns the smallest value
            Console.WriteLine(myNumbers.Sum());  // returns the sum of elements




            Console.ReadKey();
        }
    }
}
