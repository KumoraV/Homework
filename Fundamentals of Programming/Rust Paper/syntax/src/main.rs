fn main()
{
    let mut height:i64 = 10;
    height = multiply_value(height);
    println!("\nValue of height: {}\n", height);
}

fn multiply_value(x: i64) -> i64
{
   x * x
}