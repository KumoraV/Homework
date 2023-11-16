fn main()
{
    let mut height:i64 = 10;
    height = multiplyValue(height);
    println!("Value of height: {}", height);
}

fn multiplyValue(x: i64) -> i64
{
   x * x
}