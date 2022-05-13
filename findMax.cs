using System;

namespace ConsoleApp1
{
    class findMax
    {
        public static void Main()
        {

            // khoi tao mang
            int[] arr = new int[] { 30, 22, 22, 12, 11 };
            // su dung sort trong arr
            Array.Sort(arr);
            //nghich dao
            Array.Reverse(arr);

            for (int i = 0; i < 5; i++)
            {
                Console.Write(arr[i] + " ");

            }

           
        }
    }
}
