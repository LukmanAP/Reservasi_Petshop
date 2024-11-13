<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dava Petshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        .date-picker-container {
            position: relative;
        }
        .date-picker-container input {
            padding-right: 30px;
        }
        .date-picker-container:after {
            content: "\1F4C5";
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
        }
				.cat-card {
        transition: all 0.3s ease;
        cursor: pointer;
   		  }

				.cat-card:hover {
						transform: translateY(-5px);
						box-shadow: 0 4px 8px rgba(0,0,0,0.1);
				}
				.cat-card.selected {
						border: 2px solid #007bff;
				}
				.cat-image {
						height: 150px;
						object-fit: cover;
				}
				.form-check-label {
						font-size: 0.9rem;
				}
				@media (max-width: 576px) {
						.cat-image {
								height: 120px;
						}
						.form-check-label {
								font-size: 0.8rem;
						}
				}
    </style>

  </head>
  <body>
