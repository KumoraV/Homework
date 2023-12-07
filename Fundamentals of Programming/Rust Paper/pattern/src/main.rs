fn main() {
    // Showcase of match expression
    let grade = 75;
    match grade 
    {
        90..=100 => println!("\nYour letter grade is A.\n"),
        80..=89 => println!("\nYour letter grade is B.\n"),
        70..=79 => println!("\nYour letter grade is C.\n"),
        60..=69 => println!("\nYour letter grade is D.\n"),
        0..=59 => println!("\nYour letter grade is F.\n"),
        _=> println!("\nInvalid grade.\n"),
    }

    //Showcase of 'if let' expression
    enum CarsOwned
    {
        Honda,
        Toyota,
    }

    let car1 = CarsOwned::Honda;
    let car2 = CarsOwned::Toyota;
    // This will print since car1 is a honda
    if let CarsOwned::Honda = car1
    {
        println!("You already own a Honda!");
    }
    // This will not print since car2 is a toyota
    if let CarsOwned::Honda = car2
    {
        println!("You already own a Honda!");
    }
}
