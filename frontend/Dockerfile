FROM node:20-alpine

WORKDIR /app

COPY package.json package-lock.json* pnpm-lock.yaml* yarn.lock* ./

RUN npm install

COPY . /app

EXPOSE 5173

CMD ["npm", "run", "dev"]
