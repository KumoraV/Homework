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

    enum CarShop
    {
        Mitsubishi,
        Honda,
        Acura,
    }

    let new_car = CarShop::Honda;

    if let CarShop::Honda = new_car
    {
        if let CarsOwned::Honda = new_car
        {
            println!("\nYou already own a Honda!");
        }
    }
}
