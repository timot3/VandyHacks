# VandyHacks
VandyHacks VI

34.73.11.166
GANdraw.online

From [our hackathon submission](https://devpost.com/software/drawit-ml)

## Inspiration
Before VandyHacks, we thought of hackathons as a place to practice our technical programming skills and explore new topics like Machine Learning (ML). When considering the art theme of VandyHacks, we wanted to once again do something with ML to further our knowledge in the field, but this time with a more _creative_ aspect.

## What it does
We created a website to allow users to easily interact with our Generative Adversarial Network (GAN) in order to create computer-generated doodles. We achieved this by creating a database of user-drawn doodles from [Google's Quick, Draw! dataset](https://quickdraw.withgoogle.com/data) and traning a GAN on our chosen topics. When a user selects a category on our website, our model generates its own image based on the user data and displays it on our website.

## How we built it
We trained the network using Tensorflow and Google Cloud, and hosted the website with a mixture of Python, Flask, HTML/CSS, PHP, and JavaScript.

## Challenges we ran into
One of our main concerns was [mode collapse](https://medium.com/@jonathan_hui/gan-why-it-is-so-hard-to-train-generative-advisory-networks-819a86b3750b). This may occur when the generator generates a limited diversity of samples regardless of the discriminator's feedback, resulting in the model outputting a limited range of results. There are many other factors that affect when mode collapse occurs, which is why it remains one of the most complex issues in machine learning today. Trying to find methods to reduce it was extremely difficult and led to us exploring different GAN architectures, specifically [Spectral Normalization for Keras Dense and Convolution Layers](https://github.com/IShengFang/SpectralNormalizationKeras).

## Accomplishments that we're proud of
Despite time constraints and limited computational resources, we were able to train our network on the full dataset for each of the categories. 

## What we learned
One of our main takeaways from this experience was learning how to train GANs on large datasets using Google Cloud. This was also the first time we had worked with Tensorflow 2.0. 

## What's next for GANdraw.online
After solving our issues with [mode collapsing](https://medium.com/@jonathan_hui/gan-why-it-is-so-hard-to-train-generative-advisory-networks-819a86b3750b), we hope to train a Convolutional Recurrent Neural Network (CRNN) to draw the computer-generated images based off time between points since we unfortunately did not have time to do so. Another feature we were planning to implement was running a form of image analysis to predict colors based on the chosen word to make our doodles colorful.
