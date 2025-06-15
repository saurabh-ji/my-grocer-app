# Use official lightweight nginx image
FROM nginx:alpine

# Remove default nginx index.html
COPY . .
WORKDIR /mygrocer-app


