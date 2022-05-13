using System;
using System.Linq;

public class findFrequent
{
    //khoi tao mang
    public static void Main(string[] args)
    {
        string[] array = new string[] { "3","7","3" };
        
        MaxOccurrence(array);
    }

    //use LINQ
    static void MaxOccurrence(string[] numbers)
    {
        var groups = numbers.GroupBy(x => x);
        var largest = groups.OrderByDescending(x => x.Count()).First();
        Console.WriteLine("{0}  xuat hien {1} lan", largest.Key, largest.Count());
    }


}

